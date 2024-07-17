<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Student\Enrollment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function enroll(Request $request, $courseId)
    {
        $course = Course::findOrFail($courseId);
        $student = Auth::user();

        // Check if the student is already enrolled
        if ($course->students()->where('student_id', $student->id)->exists()) {
            return redirect()->back()->with('error', 'You are already enrolled in this course.');
        }

        // Enroll the student in the course
        Enrollment::create([
            'course_id' => $course->id,
            'student_id' => $student->id,
        ]);

        return redirect()->route('courses.show', $course->id)->with('success', 'You have successfully enrolled in the course.');
    }
}
