<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use App\Models\Tutor\Course;
use Illuminate\Support\Facades\Auth;

class CourseProgress extends Component
{
    public $course;
    public $progress = 0;
    public $completed = false;
    public $remaining = 0;
    public $review = '';
    public $rating;
    public $hasReviewed = false;
    public $reviews;

    protected $listeners = ['lessonCompleted' => 'calculateProgress'];

    public function mount(Course $course)
    {
        $this->course = $course;
        $this->calculateProgress();
        $this->loadReviews();
        $this->checkIfReviewed();
    }

    public function calculateProgress()
    {
        $totalLessons = $this->course->lessons()->count();
        $completedLessons = Auth::user()->completedLessons()
            ->whereIn('completed_lessons.lesson_id', $this->course->lessons()->pluck('lessons.id'))
            ->count();

        if ($totalLessons == 0) {
            $this->progress = 0;
            $this->remaining = 0;
        } else {
            $this->progress = ($completedLessons / $totalLessons) * 100;
            $this->remaining = $totalLessons - $completedLessons;
        }

        $this->completed = $this->progress == 100;
    }

    public function loadReviews()
    {
        $this->reviews = $this->course->reviews()->with('user')->get();
    }

    public function checkIfReviewed()
    {
        $this->hasReviewed = $this->course->reviews()->where('user_id', Auth::id())->exists();
    }

    public function submitReview()
    {
        $this->validate([
            'review' => 'required|string|max:500',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'course_id' => $this->course->id,
            'user_id' => Auth::id(),
            'review' => $this->review,
            'rating' => $this->rating,
        ]);

        $this->review = '';
        $this->rating = null;

        $this->checkIfReviewed();
        $this->loadReviews();
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
