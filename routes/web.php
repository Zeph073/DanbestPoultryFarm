<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/faqs', function () {
    return view('faqs');
});


Route::get('/contact-us', function () {
    return view('contact-us');
});
