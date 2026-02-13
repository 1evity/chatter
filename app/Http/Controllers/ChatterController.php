<?php

namespace App\Http\Controllers;

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
}
