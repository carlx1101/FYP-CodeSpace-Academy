<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tutor\Option;

class AssessmentForm extends Component
{
    public $lesson;
    public $assessment;
    public $selectedOption;
    public $feedback;

    public function mount($lesson)
    {
        $this->lesson = $lesson;
        $this->assessment = $lesson->assessment;

    }

    public function submit()
    {
        $selectedOption = Option::find($this->selectedOption);

        if ($selectedOption && $selectedOption->is_correct) {
            $this->feedback = 'Correct Answer!';
        } else {
            $this->feedback = 'Wrong Answer. Try Again.';
        }

        $this->dispatch('feedbackReceived');
    }

    public function render()
    {
        return view('livewire.assessment-form');
    }
}
