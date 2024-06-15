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

        // Create the assistant
        $assistantResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->post('https://api.openai.com/v1/assistants', [
            'instructions' => 'You are a personal tutor helping students with programming questions.',
            'name' => 'Programming Tutor',
            'tools' => [['type' => 'code_interpreter']],
            'model' => 'gpt-4o'
        ]);

        $assistant = $assistantResponse->json();

        // Create a thread
        $threadResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->post('https://api.openai.com/v1/threads', []);

        $thread = $threadResponse->json();

        // Add a message to the thread
        $messageResponse = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            'OpenAI-Beta' => 'assistants=v2'
        ])->post("https://api.openai.com/v1/threads/{$thread['id']}/messages", [
            'role' => 'user',
            'content' => $userQuestion
        ]);

        // Create and poll a run
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
        $assistantResponse = collect($messages['data'])->where('role', 'assistant')->pluck('content')->first();

        // Return the assistant's response
        return response()->json([
            'question' => $userQuestion,
            'answer' => $assistantResponse
        ]);
    }



}
