<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/posts/{post}', function ($post) {
    return view('posts.show', ['post' => $post]);
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
