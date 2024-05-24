<?php

namespace App\Http\Controllers\Tutor;

use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Tutor\Section;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $courseId)
    {
        // Retrieve the course by ID
        $course = Course::findOrFail($courseId);

        // Get the sections associated with the course
        $sections = $course->sections;

        // dd($sections);
        return view('tutor.courses.curriculum', compact('course', 'sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tutor.sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $courseId)
    {

        $section = new Section([
            'title' => $request->input('title'),
            'description' => $request->input('description'),

        ]);

        // Assuming you have a form input field for course_id, you can associate the section with the course
        $courseId = $courseId;
        $course = Course::findOrFail($courseId);
        $course->sections()->save($section);

        return redirect()->route('sections.index', ['courseId' => $courseId])->with('success', 'Section created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($courseId, $sectionId)
    {
        // Find the course by ID
        $course = Course::findOrFail($courseId);

        // Find the section by ID within the given course
        $section = $course->sections()->findOrFail($sectionId);

        // Delete all the lessons associated with the section
        // $section->lessons()->delete();

        // Delete the section
        $section->delete();

        return redirect()->route('sections.index', ['courseId' => $courseId])->with('success', 'Section and associated lessons deleted successfully');
    }
}
