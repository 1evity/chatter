<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatterController;

Route::get('/', [ChatterController::class, 'index']);
Route::get('/chats', [ChatterController::class, 'store']);
