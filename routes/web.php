<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/blog', [PostController::class, 'index'])->name('blogs');
Route::get('/blog/create', [PostController::class, 'create'])->name('blogs.create');
Route::post('/blog', [PostController::class, 'store'])->name('blogs.store');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blogs.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('blogs.edit');
Route::put('/blog/{post}', [PostController::class, 'update'])->name('blogs.update');
Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('blogs.destroy');
