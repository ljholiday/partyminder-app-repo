<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Invite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invite', function () {
    return view('invite');
});

Route::post('/api/invite', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:150',
    ]);

    $invite = Invite::create($validated); // Save to DB

    return response()->json([
        'message' => 'Guest invited successfully!',
        'data' => $invite
    ]);
});

Route::get('/admin/invites', function () {
    $invites = Invite::latest()->get();

    return view('admin.invites', ['invites' => $invites]);
});

