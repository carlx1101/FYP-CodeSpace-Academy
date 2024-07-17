<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tutor\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.events.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'start_date' => 'required|date_format:d/m/Y H:i',
            'end_date' => 'required|date_format:d/m/Y H:i|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Convert start_date and end_date to the correct format
        $start_date = \Carbon\Carbon::createFromFormat('d/m/Y H:i', $request->input('start_date'));
        $end_date = \Carbon\Carbon::createFromFormat('d/m/Y H:i', $request->input('end_date'));

        // Create the event
        $event = Event::create([
            'title' => $request->input('title'),
            'event_type' => $request->input('event_type'),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'location' => $request->input('location'),
            'description' => $request->input('description'),
            'host_id' => auth()->id(),
        ]);

        // Return a response
        return response()->json(['message' => 'Event created successfully!', 'event' => $event], 201);
    }


    public function edit(Event $event)
    {
        $users = User::all();
        return view('admin.events.edit', compact('event', 'users'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_type' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'guests' => 'array',
            'guests.*' => 'exists:users,id',
        ]);

        $event->update([
            'title' => $request->title,
            'event_type' => $request->event_type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'location' => $request->location,
            'description' => $request->description,
        ]);

        $event->users()->sync($request->guests);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

}
