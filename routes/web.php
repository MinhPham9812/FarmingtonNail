<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/coupons', function () {
    return view('pages.coupons');
})->name('coupons');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');