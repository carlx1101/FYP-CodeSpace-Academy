<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Student\Order;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function studentDashboard(): View
    {

        $myCourses = Auth::user()->orders()->with('orderItems.course')->get();
        dd($myCourses);
        return view('student.dashboard');
    }

    public function tutorDashboard(): View
    {
        return view('tutor.dashboard');
    }

    public function adminDashboard(): View
    {
        return view('admin.dashboard');
    }


}
