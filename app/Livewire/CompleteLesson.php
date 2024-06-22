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
            $this->dispatch('lessonIncomplete');
        } else {
            $user->completedLessons()->attach($this->lesson->id);
            $this->completed = true;

            $nextLesson = $this->getNextLesson();

            if ($nextLesson) {
                $url = route('student.learn', ['courseTitle' => $this->lesson->section->course->title, 'lessonId' => $nextLesson->id]);
                return redirect($url);
                // $this->dispatch('redirectToNextLesson', ['url' => $url]);
            } else {
                $this->dispatch('lessonCompleted');
            }
        }
    }

    public function getNextLesson()
    {
        // Ensure lessons are ordered by ID or another attribute
        $lessons = $this->lesson->section->lessons()->orderBy('id')->get();

        $currentLessonIndex = $lessons->search(function ($lesson) {
            return $lesson->id === $this->lesson->id;
        });

        // Debugging information
        // dd($currentLessonIndex, $lessons->count() - 1);

        if ($currentLessonIndex !== false && $currentLessonIndex < $lessons->count() - 1) {
            return $lessons->get($currentLessonIndex + 1);
        }

        return null;
    }

    public function render()
    {
        return view('livewire.complete-lesson');
    }
}
