<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/invite', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:150',
    ]);

    return response()->json([
        'message' => 'Guest invited successfully!',
        'data' => $validated
    ]);
});

