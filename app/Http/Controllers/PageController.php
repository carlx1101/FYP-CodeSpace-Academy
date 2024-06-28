<?php

namespace App\Http\Controllers;

use App\Models\Tutor\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $courses = Course::where('publishing_status', true)->get();
        return view('student.home',compact('courses'));
    }

    public function courses()
    {


      // Eager load sections and their lessons for each course
      $courses = Course::where('publishing_status', true)
      ->with(['sections.lessons'])
      ->paginate(10);


        return view('student.courses', compact('courses'));
    }

    public function course($id)
    {
        // Eager load sections and their lessons, and also reviews for the specific course
        $course = Course::with(['sections.lessons', 'reviews.user'])->findOrFail($id);

        // Calculate the average rating and review counts
        $averageRating = $course->reviews()->avg('rating');
        $reviewCounts = [
            '5' => $course->reviews()->where('rating', 5)->count(),
            '4' => $course->reviews()->where('rating', 4)->count(),
            '3' => $course->reviews()->where('rating', 3)->count(),
            '2' => $course->reviews()->where('rating', 2)->count(),
            '1' => $course->reviews()->where('rating', 1)->count(),
        ];

        return view('student.course', compact('course', 'averageRating', 'reviewCounts'));
    }

}
