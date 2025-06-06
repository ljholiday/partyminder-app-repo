<?php

use App\Services\InviteNotificationService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Invite;
use App\Models\Event;


Route::get('/', function () {
    return view('home');
});

Route::get('/invite', function () {
    return view('invite');
});

Route::post('/api/invite', function (Request $request) {
    Log::debug('Invite form submitted', ['input' => $request->all()]);

    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:150',
        'event_id' => 'required|exists:events,id',
        'invitor_email' => 'required|email|max:150',
    ]);

    Log::debug('Validation passed');

    $invite = Invite::create($validated);

    Log::debug('Invite saved', ['invite' => $invite->toArray()]);

    try {
        InviteNotificationService::send($invite);
        Log::debug('InviteNotificationService fired');
    } catch (\Throwable $e) {
        Log::error('Email sending failed: ' . $e->getMessage(), [
            'trace' => $e->getTraceAsString(),
            'invite' => $invite->toArray()
        ]);
        return response()->json(['error' => 'Error sending email'], 500);
    }

    return response()->json([
        'message' => 'Guest invited successfully!',
        'data' => $invite
    ]);
});

Route::get('/admin/invites', function () {
    $invites = Invite::latest()->get();

    return view('admin.invites', ['invites' => $invites]);
});

// Show the event creation form

Route::get('/admin/events/create', function () {
    return view('admin.create-event');
});

// Save the new event

Route::post('/admin/events', function (Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'event_date' => 'required|date',
        'location' => 'nullable|string|max:255',
    ]);

    Event::create($validated);

    return redirect('/admin/events/create')->with('success', 'Event created successfully!');
});

// List all events
Route::get('/admin/events', function () {
    $events = Event::latest()->get();
    return view('admin.events', ['events' => $events]);
});
