<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Posts CRUD
Route::resource('posts', PostController::class);

// Categories CRUD
Route::resource('categories', CategoryController::class);
