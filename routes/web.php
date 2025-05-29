<?php

use App\Http\Controllers\SitemapController;
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


//Contact Us
Route::get('/contact-us', function () {
    return view('contact-us');
});
 #Route::post('/send-message', [ContactController::class, 'sendMail'])->name('send.message');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/robots.txt', [SitemapController::class, 'generateRobotsFile']);

 #Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
