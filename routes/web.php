<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Hello World";
});


Route::resource('posts', PostController::class);
