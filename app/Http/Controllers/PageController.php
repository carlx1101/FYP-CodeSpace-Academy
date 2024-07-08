<?php

namespace App\Http\Controllers;

use App\Models\Tutor\Post;
use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Employer\JobListing;
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

    // Handle search query
    if ($request->filled('search')) {
        $search = $request->input('search');
        $query->where(function ($q) use ($search) {
            $q->where('title', 'like', '%' . $search . '%')
                ->orWhere('subtitle', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        });
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

    return view('student.courses', compact('courses', 'categories', 'studentProgress'));
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

        $userPosts = Post::where('user_id', $course->user_id)->get();




           // Fetch instructor data
           $instructor = $course->user;

           $totalCoursesPublished = $instructor->courses()->where('publishing_status', true)->count();
           $totalInstructorReviews = $instructor->courses()->withCount('reviews')->get()->sum('reviews_count');
           $totalInstructorStudents = $instructor->courses()->withCount('enrollments')->get()->sum('enrollments_count');
           $totalInstructorRating = $instructor->courses()->with('reviews')->get()->flatMap->reviews->avg('rating');


                // Fetch random courses from the same category
        $relatedCourses = Course::where('category_id', $course->category_id)
        ->where('id', '!=', $course->id)
        ->inRandomOrder()
        ->take(3)
        ->get();


        return view('student.course', compact('course', 'averageRating', 'reviewCounts','categories','studentProgress','userPosts', 'totalCoursesPublished', 'totalInstructorReviews', 'totalInstructorStudents', 'totalInstructorRating','relatedCourses'));
    }


    public function blogs(Request $request)
    {
        $categories = Category::with('subcategories')->get();

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

        return view('student.blogs.index', compact('blogs', 'tags','studentProgress','categories'));
    }



    public function blog(Post $post)
    {

        $categories = Category::with('subcategories')->get();

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
        return view('student.blogs.show', compact('post','studentProgress','categories'));
    }

    public function contact()
    {
        $categories = Category::with('subcategories')->get();

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

        return view('student.contact',compact('studentProgress','categories'));
    }

    public function jobs(Request $request)
    {
        $categories = Category::with('subcategories')->get();
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

        $search = $request->input('search');
        $location = $request->input('location');

        $jobs = JobListing::with('company')
            ->when($search, function ($query, $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%')
                        ->orWhere('type', 'like', '%' . $search . '%')
                        ->orWhere('mode', 'like', '%' . $search . '%')
                        ->orWhereHas('company', function ($query) use ($search) {
                            $query->where('name', 'like', '%' . $search . '%');
                        });
                });
            })
            ->when($location, function ($query, $location) {
                $query->where('location', 'like', '%' . $location . '%');
            })
            ->get();

        return view('student.jobs', compact('jobs', 'categories', 'studentProgress'));
    }


    public function job(JobListing $job)
    {
        $categories = Category::with('subcategories')->get();
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

        return view('student.job', compact('job','categories','studentProgress'));
    }
}
