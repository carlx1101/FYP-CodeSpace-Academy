<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AssistantChat extends Component
{
    public $lessonId;
    public $messages = [];
    public $question;

    public function mount($lessonId)
    {
        $this->lessonId = $lessonId;
        $this->messages[] = [
            'role' => 'assistant',
            'content' => 'Hi, I am AI Assistant from CodeSpace. I am happy to assist you today!'
        ];
    }

    public function askQuestion()
    {
        $userQuestion = $this->question;

        // Send out the user's message immediately
        $this->messages[] = [
            'role' => 'user',
            'content' => $userQuestion,
        ];

        // Clear the input field
        $this->question = '';

        // Display a "typing" indicator for the AI
        $this->messages[] = [
            'role' => 'assistant',
            'content' => 'typing...',
        ];

        // Dispatch browser event for AI typing start
        $this->dispatch('ai-typing-start');

        // Asynchronous call to get the assistant response
        $this->getAssistantResponseAsync($userQuestion);
    }

    public function getAssistantResponseAsync($userQuestion)
    {
        $this->dispatch('ai-typing-start');
        // Use Livewire's built-in async request handling
        $this->dispatch('fetchAssistantResponse', $userQuestion);
    }

    protected $listeners = [
        'fetchAssistantResponse' => 'fetchAssistantResponse',
    ];

    public function fetchAssistantResponse($userQuestion)
    {
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
        Http::withHeaders([
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
        $assistantMessage = collect($messages['data'])->where('role', 'assistant')->first();
        $assistantResponse = $assistantMessage['content'][0]['text']['value'] ?? '';

        // Remove the "typing" indicator and add the actual response
        array_pop($this->messages);
        $this->messages[] = [
            'role' => 'assistant',
            'content' => $assistantResponse,
        ];

        // Dispatch browser event for AI typing end
        $this->dispatch('ai-typing-end');
    }

    public function render()
    {
        return view('livewire.assistant-chat');
    }
}
