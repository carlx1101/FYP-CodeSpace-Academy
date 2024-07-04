<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student\ContactInquiry;

class ContactInquiryController extends Controller
{
    public function index()
    {
        $inquiries = ContactInquiry::all();
        return view('admin.contact_inquiries.index', compact('inquiries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'details' => 'required|string',
        ]);

        ContactInquiry::create($request->all());

        return redirect()->back()->with('success', 'Inquiry submitted successfully!');
    }

    public function show($id)
    {
        $inquiry = ContactInquiry::findOrFail($id);
        return view('admin.contact_inquiries.show', compact('inquiry'));
    }

    public function destroy($id)
    {
        $inquiry = ContactInquiry::findOrFail($id);
        $inquiry->delete();

        return redirect()->route('contact_inquiries.index')->with('success', 'Inquiry deleted successfully!');
    }

}
