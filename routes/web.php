<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\GenreController; 
use App\Http\Controllers\ReviewController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/movies', MovieController::class);

Route::get('/products', [ProductController::class, 'index']);

Route::resource('/genres', GenreController::class);

Route::resource('/reviews', ReviewController::class);