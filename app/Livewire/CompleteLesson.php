<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tutor\Lesson;
use Illuminate\Support\Facades\Auth;

class CompleteLesson extends Component
{
    public $lesson;
    public $completed = false;

    public function mount(Lesson $lesson)
    {
        $this->lesson = $lesson;
        $this->completed = Auth::user()->completedLessons->contains($lesson->id);
    }

    public function toggleCompletion()
    {
        $user = Auth::user();

        if ($this->completed) {
            $user->completedLessons()->detach($this->lesson->id);
            $this->completed = false;
        } else {
            $user->completedLessons()->attach($this->lesson->id);
            $this->completed = true;
        }

        $this->dispatch('lessonCompleted', $this->lesson->course_id); // Emit an event to update the course progress
    }

    public function render()
    {
        return view('livewire.complete-lesson');
    }

}
