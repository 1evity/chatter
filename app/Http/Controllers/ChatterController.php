<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatterController extends Controller
{
    public function index()
    {
        $chats = Chat::with('user')
            ->latest()
            ->take(50)
            ->get();

        return view('home', ['chats' => $chats]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $valid = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Create the chat
        \App\Models\Chat::create([
            'message' => $valid['message'],
            'user_id' => null,
        ]);

        // Redirect back to feed
        return redirect('/')->with('success', 'Chat posted!');
    }
}
