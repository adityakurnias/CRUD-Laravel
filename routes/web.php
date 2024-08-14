<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('home', ['nama' => 'Aditya', 'judul' => 'Home']);
});

Route::get('/blog', function () {
    return view('blog', ['judul' => 'Blog']);
});

Route::get('/about', function () {
    return view('about', ['judul' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['judul' => 'Contact']);
});