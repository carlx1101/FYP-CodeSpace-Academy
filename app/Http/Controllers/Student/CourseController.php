<?php

namespace App\Http\Controllers\Student;

use App\Models\Tutor\Course;
use App\Models\Tutor\Lesson;
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

    public function learn($courseTitle, $lessonId = null)
    {
        $course = Course::where('title', $courseTitle)->firstOrFail();
        $sections = $course->sections()->with('lessons')->get();

        if ($lessonId) {
            $currentLesson = Lesson::findOrFail($lessonId);
        } else {
            // Default to the first lesson of the first section
            $currentLesson = $sections->first()->lessons->first();
        }

        // Load notes for the current lesson
        $currentLesson->load('notes');

        // Paginate discussions
        $discussions = $currentLesson->discussions()->with('user')->paginate(5); // Adjust the number of items per page as needed

        return view('student.learn', compact('course', 'sections', 'currentLesson', 'discussions'));
    }


}
