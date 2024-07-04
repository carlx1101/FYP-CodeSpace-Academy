<?php

namespace App\Http\Controllers\Student;

use App\Models\Tutor\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DiscussionController extends Controller
{
    public function store(Request $request, $lessonId)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $lesson = Lesson::findOrFail($lessonId);

        $lesson->discussions()->create([
            'user_id' => Auth::id(),
            'title' => $request->input('title'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Discussion added successfully!');
    }
}
