<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

//1- define a new route so the user can access it through the browser
//2- define controller that renders the view
//3- define view that contains list of posts
//4- remove any static data from the view.

//----------------------------------------------------------------------------------------
//1- structure change for database (create table, edit culumn, delete column)
//2- operations (create, read, update, delete)