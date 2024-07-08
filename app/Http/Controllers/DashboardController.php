<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Tutor\Post;
use App\Models\Tutor\Event;
use App\Models\Tutor\Course;
use Illuminate\Http\Request;
use App\Models\Student\Order;
use App\Models\Employer\JobListing;
use Illuminate\Support\Facades\Auth;
use App\Models\Student\JobApplication;

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



              $user = Auth::user();
              $monthlySales = Order::selectRaw('SUM(total) as total, MONTH(created_at) as month')
                  ->whereYear('created_at', Carbon::now()->year)
                  ->groupBy('month')
                  ->orderBy('month')
                  ->pluck('total', 'month')
                  ->toArray();

              // Initialize an array with all months set to 0
              $salesData = array_fill(1, 12, 0);

              // Fill the salesData array with the actual sales data
              foreach ($monthlySales as $month => $total) {
                  $salesData[$month] = $total;
              }


              return view('tutor.dashboard', compact('totalCourses', 'totalBlogPosts', 'totalEvents', 'totalSales', 'salesData'));
            }



            public function adminDashboard(): View
            {
                // Monthly Sales Data
                $monthlySales = Order::selectRaw('SUM(total) as total, MONTH(created_at) as month')
                    ->whereYear('created_at', Carbon::now()->year)
                    ->groupBy('month')
                    ->orderBy('month')
                    ->pluck('total', 'month')
                    ->toArray();

                // Initialize an array with all months set to 0
                $salesData = array_fill(1, 12, 0);

                // Fill the salesData array with the actual sales data
                foreach ($monthlySales as $month => $total) {
                    $salesData[$month - 1] = $total; // Adjust for zero-based index
                }

                // Total Users
                $totalUsers = User::count();

                // Total Revenue
                $totalRevenue = Order::sum('total');

                // Total Orders
                $totalOrders = Order::count();

                // Total Courses
                $totalCourses = Course::count();

                return view('admin.dashboard', compact('salesData', 'totalUsers', 'totalRevenue', 'totalOrders', 'totalCourses'));
            }


            public function employerDashboard(): View
            {
                // Get the authenticated employer
                $employerId = Auth::id();

                // Find company of employerId
                $company = User::find($employerId)->company;

                // Calculate total job listings for the employer
                $totalListings = JobListing::where('company_id', $company->id)->count();


                // Calculate total applicants for the employer's job listings
                $totalApplicants = JobApplication::whereHas('jobListing', function ($query) use ($company) {
                    $query->where('company_id', $company->id);
                })->count();

                return view('employer.dashboard', compact('totalListings', 'totalApplicants'));


            }

}
