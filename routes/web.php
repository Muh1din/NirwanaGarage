<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/semua-blog', fn () => view('blog.allBlog'));
Route::get('/semua-project', fn () => view('project.allProject'));