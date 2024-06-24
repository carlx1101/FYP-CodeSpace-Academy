<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tutor\Course;
use Illuminate\Support\Facades\Auth;

class CourseProgress extends Component
{
    public $course;
    public $progress = 0;
    public $completed = false;

    protected $listeners = ['lessonCompleted' => 'calculateProgress'];

    public function mount(Course $course)
    {
        $this->course = $course;
        $this->calculateProgress();
    }

    public function calculateProgress()
    {
        $totalLessons = $this->course->lessons()->count();
        $completedLessons = Auth::user()->completedLessons()
            ->whereIn('completed_lessons.lesson_id', $this->course->lessons()->pluck('lessons.id'))
            ->count();

        if ($totalLessons == 0) {
            $this->progress = 0;
        } else {
            $this->progress = ($completedLessons / $totalLessons) * 100;
        }

        $this->completed = $this->progress == 100;
    }

    public function downloadCertificate()
    {
        return redirect()->route('certificate.download', ['course' => $this->course->id]);
    }

    public function render()
    {
        return view('livewire.course-progress');
    }
}
