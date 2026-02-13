<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatterController extends Controller
{
    public function index()
    {
        $chats = [
        [
            'author' => 'Jane Doe',
            'message' => 'My code worked on the first try. I\'m now convinced my laptop is possessed.',
            'time' => '5 minutes ago'
        ],
        [
            'author' => 'John Smith',
            'message' => 'Spent 3 hours debugging. The error: missing semicolon. I need a vacation.',
            'time' => '1 hour ago'
        ],
        [
            'author' => 'Alice Johnson',
            'message' => 'Production is down. Just kidding... or am I?',
            'time' => '3 hours ago'
        ],
        [
            'author' => 'Mike Wilson',
            'message' => 'My code is like a bad joke. No matter how you explain it, it still doesn\'t make sense.',
            'time' => '5 hours ago'
        ],
        [
            'author' => 'Sarah Chen',
            'message' => 'The meeting could have been an email. The email could have been a 5-second text. The text could have been nothing.',
            'time' => '1 day ago'
        ],
        [
            'author' => 'Dave Miller',
            'message' => 'I don\'t always test my code, but when I do, I do it in production.',
            'time' => '2 days ago'
        ],
        [
            'author' => 'Lisa Brown',
            'message' => 'My code: "Trust me bro"',
            'time' => '3 days ago'
        ]];

        return view('home', ['chats' => $chats]);
    }
}
