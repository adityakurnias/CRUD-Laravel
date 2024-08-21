<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
return view('home', ['nama' => 'Aditya', 'page' => 'Home']);
});

Route::get('/blogs', function () {
    return view('blogs', [ 'page' => 'Blog', 'Posts' => Post::all()]);
});

Route::get('/blog/{slug}', function($slug) {
        $Post = Post::find($slug);
        return view('blog', ['page' => 'Postingan', 'Post' => $Post]);
});

Route::get('/about', function () {
    return view('about', ['page' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['page' => 'Contact']);
});
