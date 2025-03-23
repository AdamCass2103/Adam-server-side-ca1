<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayerController;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
