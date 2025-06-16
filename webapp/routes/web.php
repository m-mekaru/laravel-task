<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostsController;

Route::get('/index', [PostsController::class, 'index']);

Route::get('/show', [PostsController::class, 'show']);
