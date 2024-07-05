<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;
use App\Models\Employer\JobListing;
use App\Http\Controllers\Controller;

class JobListingController extends Controller
{
    public function index()
    {
        $jobListings = JobListing::all();
        return view('employer.job_listings.index', compact('jobListings'));
    }

    public function create()
    {
        return view('employer.job_listings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'mode' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        JobListing::create($request->all());

        return redirect()->route('employer.job_listings.index')->with('success', 'Job listing created successfully.');
    }

    public function show(JobListing $jobListing)
    {
        return view('employer.job_listings.show', compact('jobListing'));
    }

    public function edit(JobListing $jobListing)
    {
        return view('employer.job_listings.edit', compact('jobListing'));
    }

    public function update(Request $request, JobListing $jobListing)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'mode' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $jobListing->update($request->all());

        return redirect()->route('employer.job_listings.index')->with('success', 'Job listing updated successfully.');
    }

    public function destroy(JobListing $jobListing)
    {
        $jobListing->delete();

        return redirect()->route('employer.job_listings.index')->with('success', 'Job listing deleted successfully.');
    }
}
