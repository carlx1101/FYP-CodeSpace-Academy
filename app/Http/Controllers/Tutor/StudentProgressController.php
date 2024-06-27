<?php

namespace App\Http\Controllers\Tutor;

use App\Models\User;
use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentProgressController extends Controller
{
    public function show($studentId, $courseId)
    {
        $student = User::findOrFail($studentId);
        $course = Course::findOrFail($courseId);

        $completedLessons = $student->completedLessons()
            ->whereIn('lessons.id', $course->lessons->pluck('id'))
            ->orderBy('completed_lessons.created_at', 'asc')
            ->get()
            ->map(function ($lesson) {
                return [
                    'lesson_title' => $lesson->title,
                    'completed_at' => $lesson->pivot->created_at,
                ];
            });

        // Determine if the course is completed
        $lastLesson = $course->lessons()->orderBy('id', 'desc')->first();
        $lastLessonCompletedAt = null;
        $courseCompleted = false;

        if ($lastLesson && $student->completedLessons->contains($lastLesson->id)) {
            $lastLessonCompletedAt = $student->completedLessons->where('id', $lastLesson->id)->first()->pivot->created_at;
            $courseCompleted = true;
        }

        return view('tutor.courses.student-progress', compact('student', 'course', 'completedLessons', 'courseCompleted', 'lastLessonCompletedAt'));
    }
}
