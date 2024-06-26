<?php

namespace App\Http\Controllers\Tutor;

use App\Models\Tutor\Video;
use App\Models\Tutor\Lesson;
use App\Models\Tutor\Option;
use Illuminate\Http\Request;
use App\Models\Tutor\Article;
use App\Models\Tutor\Section;
use App\Models\Tutor\Assessment;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function store(Request $request, Section $section)
    {
        // Create a new Lesson
        $lesson = new Lesson([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lesson_type' => $request->input('lesson_type'),
            'is_preview' => $request->input('is_preview', 0),
        ]);

        // Save the Lesson to the section
        $section->lessons()->save($lesson);

        // Check the lesson type
        $lessonType = $request->input('lesson_type');

        if ($lessonType === 'video') {
            // Handle video lesson
            $this->storeVideoLesson($request, $lesson);
        } elseif ($lessonType === 'article') {
            // Handle article lesson
            $this->storeArticleLesson($request, $lesson);
        } elseif ($lessonType === 'assessment') {
            // Handle assessment lesson
            $this->storeAssessmentLesson($request, $lesson);
        }

        // Check if the user uploaded a knowledge document
        if ($request->hasFile('knowledge')) {
            $knowledgePath = $request->file('knowledge')->store('knowledge', 'public');
            $lesson->knowledge = $knowledgePath;
            $lesson->save();
        }

        return redirect()->back()->with('success', 'Lesson created successfully.');
    }

    protected function storeVideoLesson(Request $request, Lesson $lesson)
    {
        if ($request->hasFile('video_url')) {
            $videoPath = $request->file('video_url')->store('lessons', 'public');
            $video = new Video(['video_url' => $videoPath]);
        } else {
            $video = new Video(['video_url' => $request->input('video_url')]);
        }
        $lesson->video()->save($video);
    }

    protected function storeArticleLesson(Request $request, Lesson $lesson)
    {
        $article = new Article(['content' => $request->input('article_content')]);
        $lesson->article()->save($article);
    }

    protected function storeAssessmentLesson(Request $request, Lesson $lesson)
    {
        $assessment = new Assessment([
            'lesson_id' => $lesson->id,
            'question' => $request->input('question')
        ]);
        $assessment->save();

        for ($i = 1; $i <= 4; $i++) {
            $optionText = $request->input("option$i");
            $isCorrect = $request->input('correct_option') === "option$i";
            $option = new Option([
                'assessment_id' => $assessment->id,
                'option_text' => $optionText,
                'is_correct' => $isCorrect
            ]);
            $option->save();
        }
    }

    public function destroy(Section $section, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->back();
    }

}
