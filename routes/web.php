<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/faq', function() {
    return view('faq');
});

Route::get('/blog', function () {
    return view('blog');
});
