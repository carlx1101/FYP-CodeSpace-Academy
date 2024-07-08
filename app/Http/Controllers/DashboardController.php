<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Tutor\Post;
use App\Models\Tutor\Event;
use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Student\Order;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function studentDashboard(): View
    {
        $orders = Auth::user()->orders()->with('orderItems.course')->get();
        $userId = Auth::id();
        $courses = Order::getPurchasedCoursesByUser($userId);

        // Calculate total completed lessons
        $totalCompletedLessons = Auth::user()->completedLessons()->count();

        // Calculate total completed courses
        $totalCompletedCourses = 0;

        foreach ($courses as $course) {
            $totalLessons = $course->lessons->count();
            $completedLessons = Auth::user()->completedLessons()
                ->whereIn('lesson_id', $course->lessons->pluck('id'))
                ->count();

            if ($totalLessons > 0 && $completedLessons === $totalLessons) {
                $totalCompletedCourses++;
            }
        }


            // Calculate monthly expenses
            $monthlyExpenses = array_fill(0, 12, 0);

            foreach ($orders as $order) {
                $month = $order->created_at->month - 1;
                $monthlyExpenses[$month] += $order->total;
            }


            return view('student.dashboard', compact('orders', 'courses', 'totalCompletedLessons', 'totalCompletedCourses', 'monthlyExpenses'));
        }

    public function tutorDashboard(): View
    {

              // Total number of courses
              $totalCourses = Course::count();

              // Total number of blog posts
              $totalBlogPosts = Post::count();

              // Total number of events
              $totalEvents = Event::count();

              // Total sales from all courses
              // Assuming you have an Order model and each order has a total price
              $totalSales = Order::sum('total');

              return view('tutor.dashboard', compact('totalCourses', 'totalBlogPosts', 'totalEvents', 'totalSales'));
            }

    public function adminDashboard(): View
    {
        return view('admin.dashboard');
    }
    public function employerDashboard(): View
    {
        return view('employer.dashboard');
    }


}
