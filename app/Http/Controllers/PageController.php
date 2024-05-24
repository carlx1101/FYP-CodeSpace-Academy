<?php

namespace App\Http\Controllers;

use App\Models\Tutor\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function courses()
    {
        $courses = Course::all();
        return view('courses', compact('courses'));
    }

    public function course($id)
    {
        $course = Course::findOrFail($id);
        return view('course', compact('course'));
    }
}
