<?php

namespace App\Http\Controllers;

use App\Models\Tutor\Post;
use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Admin\Category;

class PageController extends Controller
{
    public function home()
    {
        $categories = Category::with('subcategories')->get();
        $courses = Course::where('publishing_status', true)->get();
        return view('student.home', compact('courses', 'categories'));
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

        return view('student.courses', compact('courses', 'categories'));
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

        return view('student.course', compact('course', 'averageRating', 'reviewCounts','categories'));
    }


    public function blogs()
    {
        $blogs = Post::all();

        return view('student.blogs.index', compact('blogs'));
    }

    public function blog(Post $post)
    {
        return view('student.blogs.show', compact('post'));
    }

}
