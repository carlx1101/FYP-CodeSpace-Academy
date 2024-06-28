<?php

namespace App\Http\Controllers\Tutor;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('guests')->get();
        return view('tutor.events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_type' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'description' => 'required|string',
            'guests' => 'required|array',
            'guests.*' => 'exists:users,id',
        ]);

        $event = Event::create([
            'event_type' => $validatedData['event_type'],
            'date' => $validatedData['date'],
            'location' => $validatedData['location'],
            'description' => $validatedData['description'],
            'host_id' => Auth::id(),
        ]);

        $event->guests()->attach($validatedData['guests']);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'event_type' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'description' => 'required|string',
            'guests' => 'required|array',
            'guests.*' => 'exists:users,id',
        ]);

        $event->update([
            'event_type' => $validatedData['event_type'],
            'date' => $validatedData['date'],
            'location' => $validatedData['location'],
            'description' => $validatedData['description'],
        ]);

        $event->guests()->sync($validatedData['guests']);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
