<?php

namespace App\Http\Controllers\Student;

use Log;
use App\Models\Tutor\Lesson;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class AssistantController extends Controller
{
    public function assistant($lessonId)
    {
        $lesson = Lesson::findOrFail($lessonId);
        return view('student.assistant', compact('lesson'));
    }

    public function question(Request $request)
    {
        $userQuestion = $request->input('question');
        $lessonId = $request->input('lesson_id');
        $file = $request->file('file');

        // Fetch the lesson details
        $lesson = Lesson::findOrFail($lessonId);

        // Step 1: Create the assistant with file_search enabled
        $assistantResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->post('https://api.openai.com/v1/assistants', [
            'instructions' => 'You are a personal tutor helping students with programming questions.',
            'name' => 'Programming Tutor',
            'tools' => [
                ['type' => 'code_interpreter'],
                ['type' => 'file_search']
            ],
            'model' => 'gpt-4o'
        ]);

        $assistant = $assistantResponse->json();

        // Step 2: Upload files and add them to a Vector Store if file is provided
        $vectorStoreId = null;
        if ($file) {
            $filePath = $file->store('assistant_files', 'public');
            $fileStream = fopen(storage_path('app/public/' . $filePath), 'r');

            $vectorStoreResponse = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'OpenAI-Beta' => 'assistants=v2'
            ])->post('https://api.openai.com/v1/vector_stores', [
                'name' => 'User Uploaded Files',
            ]);

            $vectorStore = $vectorStoreResponse->json();

            $fileUploadResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'OpenAI-Beta' => 'assistants=v2'
            ])->attach('file', $fileStream, $file->getClientOriginalName())
                ->post("https://api.openai.com/v1/vector_stores/{$vectorStore['id']}/files");

            // Poll the vector store until it's done processing
            do {
                sleep(1);
                $vectorStoreStatusResponse = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                    'OpenAI-Beta' => 'assistants=v2'
                ])->get("https://api.openai.com/v1/vector_stores/{$vectorStore['id']}");

                $vectorStore = $vectorStoreStatusResponse->json();
            } while ($vectorStore['status'] === 'in_progress');

            $vectorStoreId = $vectorStore['id'];
        }

        // Step 3: Create a thread
        $threadResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->post('https://api.openai.com/v1/threads', []);

        $thread = $threadResponse->json();

        // Add a message to the thread
        $messageData = [
            'role' => 'user',
            'content' => $userQuestion,
        ];

        if ($vectorStoreId) {
            $messageData['attachments'] = [
                [
                    'file_id' => $vectorStoreId,
                    'tools' => [['type' => 'file_search']]
                ]
            ];
        }

        $messageResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->post("https://api.openai.com/v1/threads/{$thread['id']}/messages", $messageData);

        // Step 4: Create and poll a run
        $runResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->post("https://api.openai.com/v1/threads/{$thread['id']}/runs", [
            'assistant_id' => $assistant['id'],
            'instructions' => 'Please provide a detailed explanation and solution to the user\'s programming question.'
        ]);

        $run = $runResponse->json();

        // Poll the run status
        while ($run['status'] !== 'completed') {
            sleep(1);
            $runStatusResponse = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'OpenAI-Beta' => 'assistants=v2'
            ])->get("https://api.openai.com/v1/threads/{$thread['id']}/runs/{$run['id']}");

            $run = $runStatusResponse->json();
        }

        // List messages from the thread
        $messagesResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->get("https://api.openai.com/v1/threads/{$thread['id']}/messages");

        $messages = $messagesResponse->json();

        // Extract the latest response from the assistant
        $assistantMessage = collect($messages['data'])->where('role', 'assistant')->first();
        $assistantResponse = $assistantMessage['content'][0]['text']['value'] ?? '';

        // Return the assistant's response
        return response()->json([
            'question' => $userQuestion,
            'answer' => $assistantResponse
        ]);
    }
}
