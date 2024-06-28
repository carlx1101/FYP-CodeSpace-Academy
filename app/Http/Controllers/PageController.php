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
        $course = Course::with(['sections.lessons', 'reviews.user'])->findOrFail($id);

        $reviewCounts = [
            5 => 0,
            4 => 0,
            3 => 0,
            2 => 0,
            1 => 0,
        ];

        $totalRating = 0;
        foreach ($course->reviews as $review) {
            $reviewCounts[$review->rating]++;
            $totalRating += $review->rating;
        }

        $totalReviews = $course->reviews->count();
        $averageRating = $totalReviews > 0 ? $totalRating / $totalReviews : 0;

        return view('student.course', compact('course', 'averageRating', 'reviewCounts'));
    }
}
