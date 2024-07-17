<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Tutor\CourseRequest;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();


        $userId = Auth::id();

        // Get the total number of published courses by the authenticated tutor
        $publishedCoursesCount = Course::where('user_id', $userId)->where('publishing_status', true)->count();

        // Get the total number of lessons in the courses by the authenticated tutor
        $totalLessonsCount = Course::where('user_id', $userId)
            ->withCount('lessons')
            ->get()
            ->sum('lessons_count');

        // Get the total number of enrolled students in the courses by the authenticated tutor
        $totalEnrolledStudents = Course::where('user_id', $userId)
            ->withCount('students')
            ->get()
            ->sum('students_count');


            return view('admin.courses.index', compact('courses', 'publishedCoursesCount', 'totalLessonsCount', 'totalEnrolledStudents'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.courses.create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request, Course $course)
    {
        // dd($request->all());x
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
        $data['user_id'] = Auth::id();

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
        $course = Course::findOrFail($id);
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.courses.edit', compact('course', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'welcome_message' => 'nullable|string',
            'completion_message' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'subcategory_id' => 'required|integer|exists:subcategories,id',
            'is_free' => 'sometimes|boolean',
            'price' => 'nullable|numeric',
            'learning_objectives' => 'nullable|array',
            'prerequisites' => 'nullable|array',
            'target_audiences' => 'nullable|array',
        ]);

        if ($request->hasFile('cover_image')) {
            // Delete the old cover image if it exists
            if ($course->cover_image) {
                Storage::disk('public')->delete($course->cover_image);
            }

            // Store the new cover image
            $data['cover_image'] = $request->file('cover_image')->store('cover_images', 'public');
        }

        if ($request->hasFile('promotional_video')) {
            // Delete the old promotional video if it exists
            if ($course->promotional_video) {
                Storage::disk('public')->delete($course->promotional_video);
            }

            // Store the new promotional video
            $data['promotional_video'] = $request->file('promotional_video')->store('promotional_videos', 'public');
        }

        // Update JSON fields
        $data['learning_objectives'] = json_encode($data['learning_objectives']);
        $data['prerequisites'] = json_encode($data['prerequisites']);
        $data['target_audiences'] = json_encode($data['target_audiences']);

        $data['user_id'] = $course->user_id; // Ensure the user_id is not changed

        // Update the course
        $course->update($data);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
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

    public function togglePublishingStatus(Course $course)
    {
        $course->togglePublishingStatus();
        return redirect()->route('admin.courses.index')->with('success', 'Course publishing status updated successfully.');
    }

    public function showStudents($courseId)
    {
        $course = Course::with(['students', 'lessons'])->findOrFail($courseId);
        $totalLessons = $course->lessons->count();
        $students = $course->students->map(function ($student) use ($totalLessons, $course) {
            $completedLessons = $student->completedLessons()->whereIn('lesson_id', $course->lessons->pluck('id'))->count();
            $student->completion_percentage = $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;
            return $student;
        });

        return view('admin.courses.students', compact('course', 'students'));
    }


}
