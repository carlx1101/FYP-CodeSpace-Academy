<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        Newsletter::create($request->all());

        return redirect()->back()->with('success', 'Subscribed successfully!');
    }

    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('subscriptions.index')->with('success', 'Subscription deleted successfully');
    }

}
