<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update'); 
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); 
