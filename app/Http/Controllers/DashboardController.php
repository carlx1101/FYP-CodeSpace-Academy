<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function studentDashboard(): View
    {
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
