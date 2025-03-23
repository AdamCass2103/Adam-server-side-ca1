<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\BlogController;

Route::resource('players', PlayerController::class);
Route::resource('posts', PostController::class,);
Route::get('/blog', [BlogController::class, 'index']);
