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
        // Eager load sections and their lessons for the specific course
        $course = Course::with(['sections.lessons'])->findOrFail($id);
        return view('student.course', compact('course'));
    }
}
