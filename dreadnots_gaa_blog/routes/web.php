<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\BlogController;


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/blog', [BlogController::class, 'index']);
