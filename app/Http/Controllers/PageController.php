<?php

namespace App\Http\Controllers;

use App\Models\Tutor\Post;
use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        $categories = Category::with('subcategories')->get();
        $courses = Course::where('publishing_status', true)->get();

        $studentProgress = [];

        if (Auth::check()) {
            $user = Auth::user();
            $studentProgress = $user->enrolledCourses()
                ->with('lessons')
                ->get()
                ->map(function ($course) use ($user) {
                    $totalLessons = $course->lessons->count();
                    $completedLessons = $course->lessons->whereIn('id', $user->completedLessons->pluck('id'))->count();
                    $progress = $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;

                    return [
                        'course' => $course,
                        'progress' => $progress,
                        'completed' => $progress == 100
                    ];
                });
        }

        return view('student.home', compact('courses', 'categories', 'studentProgress'));
    }



    public function courses(Request $request)
    {
        $categories = Category::with('subcategories')->get();

        $query = Course::where('publishing_status', true)->with(['sections.lessons']);

        // Apply filters
        if ($request->filled('subcategory')) {
            $query->whereHas('subcategory', function ($q) use ($request) {
                $q->where('id', $request->input('subcategory'));
            });
        }

        if ($request->filled('sort')) {
            switch ($request->input('sort')) {
                case 'highest_rated':
                    $query->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'lowest_price':
                    $query->orderBy('price', 'asc');
                    break;
                case 'highest_price':
                    $query->orderBy('price', 'desc');
                    break;
            }
        }

        $courses = $query->paginate(10);


        $studentProgress = [];

        if (Auth::check()) {
            $user = Auth::user();
            $studentProgress = $user->enrolledCourses()
                ->with('lessons')
                ->get()
                ->map(function ($course) use ($user) {
                    $totalLessons = $course->lessons->count();
                    $completedLessons = $course->lessons->whereIn('id', $user->completedLessons->pluck('id'))->count();
                    $progress = $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;

                    return [
                        'course' => $course,
                        'progress' => $progress,
                        'completed' => $progress == 100
                    ];
                });
        }

        return view('student.courses', compact('courses', 'categories','studentProgress'));
    }


    public function course($id)
    {
        $course = Course::with(['sections.lessons', 'reviews.user'])->findOrFail($id);
        $categories = Category::with('subcategories')->get();

        $reviewCounts = [
            5 => 0,
            4 => 0,
            3 => 0,
            2 => 0,
            1 => 0,
        ];

        $totalRating = 0;
        foreach ($course->reviews as $review) {
            $reviewCounts[$review->rating]++;
            $totalRating += $review->rating;
        }

        $totalReviews = $course->reviews->count();
        $averageRating = $totalReviews > 0 ? $totalRating / $totalReviews : 0;


        $studentProgress = [];

        if (Auth::check()) {
            $user = Auth::user();
            $studentProgress = $user->enrolledCourses()
                ->with('lessons')
                ->get()
                ->map(function ($course) use ($user) {
                    $totalLessons = $course->lessons->count();
                    $completedLessons = $course->lessons->whereIn('id', $user->completedLessons->pluck('id'))->count();
                    $progress = $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;

                    return [
                        'course' => $course,
                        'progress' => $progress,
                        'completed' => $progress == 100
                    ];
                });
        }

        return view('student.course', compact('course', 'averageRating', 'reviewCounts','categories','studentProgress'));
    }


    public function blogs(Request $request)
    {
        $query = Post::query();


        // Filter by tag if requested
        if ($request->has('tag')) {
            $tag = $request->input('tag');
            $query->where('tags', 'like', '%' . $tag . '%');
        }

        // Filter by search query if requested
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('subtitle', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        // Paginate the results
        $blogs = $query->orderBy('id', 'asc')->paginate(10);

        // Extract unique tags from all posts
        $tags = Post::pluck('tags')->flatMap(function($tagString) {
            return explode(',', $tagString);
        })->unique();

        // foreach($blogs as $blog){
        //     $blog->load('user');
        //     dd($blog->user->name);
        // }

        $studentProgress = [];

        if (Auth::check()) {
            $user = Auth::user();
            $studentProgress = $user->enrolledCourses()
                ->with('lessons')
                ->get()
                ->map(function ($course) use ($user) {
                    $totalLessons = $course->lessons->count();
                    $completedLessons = $course->lessons->whereIn('id', $user->completedLessons->pluck('id'))->count();
                    $progress = $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;

                    return [
                        'course' => $course,
                        'progress' => $progress,
                        'completed' => $progress == 100
                    ];
                });
        }

        return view('student.blogs.index', compact('blogs', 'tags','studentProgress'));
    }



    public function blog(Post $post)
    {

        $studentProgress = [];

        if (Auth::check()) {
            $user = Auth::user();
            $studentProgress = $user->enrolledCourses()
                ->with('lessons')
                ->get()
                ->map(function ($course) use ($user) {
                    $totalLessons = $course->lessons->count();
                    $completedLessons = $course->lessons->whereIn('id', $user->completedLessons->pluck('id'))->count();
                    $progress = $totalLessons > 0 ? ($completedLessons / $totalLessons) * 100 : 0;

                    return [
                        'course' => $course,
                        'progress' => $progress,
                        'completed' => $progress == 100
                    ];
                });
        }


        $post->load('user');
        return view('student.blogs.show', compact('post','studentProgress'));
    }

}
