<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[HomeController::class,'about'])->name('about');
Route::get('/blogs',[HomeController::class,'blogs'])->name('blogs');
Route::get('/blogs/{slug}',[HomeController::class,'blogsDetails'])->name('blogs.details');
Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');
