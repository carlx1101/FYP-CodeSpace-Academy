<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Models\Employer\JobListing;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Student\JobApplication;

class JobApplicationController extends Controller
{
    public function store(Request $request, JobListing $jobListing)
    {
        JobApplication::create([
            'user_id' => Auth::id(),
            'job_listing_id' => $jobListing->id,
        ]);

        return redirect()->route('jobs.show', $jobListing->id)->with('success', 'Application submitted successfully.');
    }
}
