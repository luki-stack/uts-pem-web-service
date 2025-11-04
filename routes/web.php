<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

// Rute untuk halaman utama
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

// Rute untuk halaman postingan
Route::get('/posts', [PostController::class, 'index']);