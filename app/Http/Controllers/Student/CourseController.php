<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Models\Student\Order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function myCourses()
    {
        $userId = Auth::id();
        $courses = Order::getPurchasedCoursesByUser($userId);
       
        return view('student.my-courses', compact('courses'));
    }
}
