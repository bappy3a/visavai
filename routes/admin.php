<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::prefix('backend')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    Route::resource('blog-categories', BlogCategoryController::class)->names('backend.blog-categories');
    Route::resource('blogs', BlogController::class)->names('backend.blogs');
});
