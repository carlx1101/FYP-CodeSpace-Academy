<?php

namespace App\Http\Controllers\Tutor;

use App\Models\Tutor\Video;
use App\Models\Tutor\Lesson;
use Illuminate\Http\Request;
use App\Models\Tutor\Article;
use App\Models\Tutor\Section;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function store(Request $request, Section $section)
    {
        // dd($request->all());
        // Create a new Lesson
        $lesson = new Lesson([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lesson_type' => $request->input('lesson_type'),

        ]);


        if($request->input('is_preview')){
            $lesson->is_preview = 1;
        }
        else {
            $lesson->is_preview = 0;
        }

        // Save the Lesson to the section
        $section->lessons()->save($lesson);

        // Check the lesson type
        $lessonType = $request->input('lesson_type'); // Assuming you have a 'type' field in your form

        if ($lessonType === 'video') {
            // Check if the user uploaded a video file
            if ($request->hasFile('video_url')) {
                // Store the uploaded video file in the 'lessons' folder
                $videoPath = $request->file('video_url')->store('lessons', 'public');

                // Create a video record with the stored path
                $video = new Video([
                    'video_url' => $videoPath,
                ]);
            } else {
                // Use the provided video URL (e.g., YouTube)
                $video = new Video([
                    'video_url' => $request->input('video_url'),
                ]);
            }

            // Associate the video with the lesson
            $lesson->video()->save($video);

        }  elseif ($lessonType === 'article') {
            // If the lesson type is "article," create an article record
            $article = new Article([
                'content' => $request->input('article_content'), // Assuming you have an 'article_content' field in your form
            ]);

            // Associate the article with the lesson
            $lesson->article()->save($article);
        }

        return redirect()->back();
    }

    public function destroy(Section $section, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->back();
    }

}
