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
use Illuminate\Support\Facades\Storage;

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
            $video = new Video(['video_url' => $videoPath, 'video_type' => 'upload']);
        } else {
            $video = new Video(['video_url' => $request->input('video_url'), 'video_type' => 'link']);
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

    public function update(Request $request, String $id, String $id2)
    {
        // Update the lesson
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'lesson_type' => 'required|in:video,article,assessment',
            'is_preview' => 'sometimes|boolean',
            'video_url' => 'required_if:lesson_type,video',
            'article_content' => 'required_if:lesson_type,article',
            'question' => 'required_if:lesson_type,assessment',
            'option1' => 'required_if:lesson_type,assessment',
            'option2' => 'required_if:lesson_type,assessment',
            'option3' => 'required_if:lesson_type,assessment',
            'option4' => 'required_if:lesson_type,assessment',
            'correct_option' => 'required_if:lesson_type,assessment',
            'knowledge' => 'sometimes',
        ]);

        $lesson = Lesson::findOrFail($id2);
        $oldLessonType = $lesson->lesson_type;
        $newLessonType = $request->input('lesson_type');

        switch ($oldLessonType) {
            case 'video':
                switch ($newLessonType) {
                    case 'video':
                        if ($request->input('video_url') != "[object Object]") {
                            if ($lesson->video->video_type === 'upload') {
                                Storage::disk('public')->delete($lesson->video->video_url);
                            }
                            $lesson->video->delete();
                            $this->storeVideoLesson($request, $lesson);
                        }
                        break;
                    case 'article':
                        $this->storeArticleLesson($request, $lesson);
                        if ($lesson->video->video_type === 'upload') {
                            Storage::disk('public')->delete($lesson->video->video_url);
                        }
                        $lesson->video->delete();
                        break;
                    case 'assessment':
                        $this->storeAssessmentLesson($request, $lesson);
                        if ($lesson->video->video_type === 'upload') {
                            Storage::disk('public')->delete($lesson->video->video_url);
                        }
                        $lesson->video->delete();
                        break;
                }
                break;
            case 'article':
                switch ($newLessonType) {
                    case 'video':
                        $this->storeVideoLesson($request, $lesson);
                        $lesson->article->delete();
                        break;
                    case 'article':
                        $lesson->article->update(['content' => $request->input('article_content')]);
                        break;
                    case 'assessment':
                        $this->storeAssessmentLesson($request, $lesson);
                        $lesson->article->delete();
                        break;
                }
                break;
            case 'assessment':
                Option::whereIn('id', $lesson->assessment->options->pluck('id')->toArray())->delete();
                $lesson->assessment->delete();
                switch ($newLessonType) {
                    case 'video':
                        $this->storeVideoLesson($request, $lesson);
                        break;
                    case 'article':
                        $this->storeArticleLesson($request, $lesson);
                        break;
                    case 'assessment':
                        $this->storeAssessmentLesson($request, $lesson);
                        break;
                }
                break;
        }

        if ($request->hasFile('knowledge')) {
            if (isset($lesson->knowledge)) {
                Storage::disk('public')->delete($lesson->knowledge);
            }
            $knowledgePath = $request->file('knowledge')->store('knowledge', 'public');
        } else if ($request->input('knowledge') == "[object Object]") {
            $knowledgePath = $lesson->knowledge;
        } else {
            if (isset($lesson->knowledge)) {
                Storage::disk('public')->delete($lesson->knowledge);
            }
            $knowledgePath = $request->input('knowledge');
        }

        $lesson->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lesson_type' => $request->input('lesson_type'),
            'is_preview' => $request->input('is_preview', 0),
            'knowledge' => $knowledgePath
        ]);
    }

    public function destroy(Section $section, Lesson $lesson)
    {
        if (isset($lesson->video)) {
            if ($lesson->video->video_type === 'upload') {
                Storage::disk('public')->delete($lesson->video->video_url);
            }
            $lesson->video->delete();
        }
        if (isset($lesson->article)) {
            $lesson->article->delete();
        }
        if (isset($lesson->assessment)) {
            Option::whereIn($lesson->assessment->options->pluck('id')->toArray())->delete();
            $lesson->assessment->delete();
        }
        if (isset($lesson->knowledge)) {
            Storage::disk('public')->delete($lesson->knowledge);
        }
        $lesson->delete();
        return redirect()->back();
    }

}
