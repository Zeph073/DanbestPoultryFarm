<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
//Home Page
Route::get('/', function () {
    return view('home');
});

//About Us Page
Route::get('/about-us', function () {
    return view('about-us');
});

//Blog Page
Route::get('/blog', function () {
    return view('blog');
});

//FAQs Page
Route::get('/faqs', function () {
    return view('faqs');
});


//products pages
Route::get('/breeding-stock', function () {
    return view('products/breeding-stock');
});
Route::get('/broiler-chickens', function () {
    return view('products/broiler-chickens');
});
Route::get('/chicken-manure', function () {
    return view('products/chicken-manure');
});
Route::get('/fertile-hatching-eggs', function () {
    return view('products/fertile-hatching-eggs');
});
Route::get('/fresh-chicken-meat', function () {
    return view('products/fresh-chicken-meat');
});
Route::get('/fresh-table-eggs', function () {
    return view('products/fresh-table-eggs');
});
Route::get('/grower-chickens', function () {
    return view('products/grower-chickens');
});
Route::get('/indigenous-kienyeji-chickens', function () {
    return view('products/indigenous-kienyeji-chickens');
});
Route::get('/live-day-old-chicks', function () {
    return view('products/live-day-old-chicks');
});
Route::get('/mature-laying-hens', function () {
    return view('products/mature-laying-hens');
});
Route::get('/other-poultry', function () {
    return view('products/other-poultry');
});


//Services Pages
Route::get('/bulk-supply', function () {
    return view('services/bulk-supply');
});
Route::get('/delivery-services', function () {
    return view('services/delivery-services');
});
Route::get('/equipment-accessories', function () {
    return view('services/equipment-accessories');
});
Route::get('/feeds-supplements', function () {
    return view('services/feeds-supplements');
});
Route::get('/poultry-housing-construction', function () {
    return view('services/poultry-housing-construction');
});
Route::get('/poultry-training', function () {
    return view('services/poultry-training');
});
Route::get('/vaccination-health', function () {
    return view('services/vaccination-health');
});



//Contact Us Page
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::post('/send-message', [ContactController::class, 'sendMail'])->name('send.message');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/robots.txt', [SitemapController::class, 'generateRobotsFile']);
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
