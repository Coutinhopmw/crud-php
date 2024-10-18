<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/posts/create',[PostController::class,'create']);

Route::get('/posts/create',[PostController::class,'create']);
Route::get('/post/read',[PostController::class,'read']);

Route::get('/', function () {
    return view('welcome');
});
