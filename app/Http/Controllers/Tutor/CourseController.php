<?php

namespace App\Http\Controllers\Tutor;

use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Tutor\CourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('tutor.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('tutor.courses.create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request, Course $course)
    {
        // dd($request->all());
        $data = $request->validated();
        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('cover_images', 'public');
        }

        if ($request->hasFile('promotional_video')) {
            $data['promotional_video'] = $request->file('promotional_video')->store('promotional_videos', 'public');
        }

        $data['learning_objectives'] = json_encode($data['learning_objectives']);
        $data['prerequisites'] = json_encode($data['prerequisites']);
        $data['target_audiences'] = json_encode($data['target_audiences']);

        Course::create($data);

        return redirect()->route('courses.index')->with('success', 'Course created successfully');

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
    public function destroy(Course $course)
    {
        if ($course->cover_image) {
            Storage::disk('public')->delete($course->cover_image);
        }

        if ($course->promotional_video) {
            Storage::disk('public')->delete($course->promotional_video);
        }

        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }

    public function getSubcategories(Request $request)
    {
        dd('hi');

        $subcategories = Subcategory::where('category_id', $request->category_id)->get();
        dd($subcategories);
        return response()->json($subcategories);
    }
}
