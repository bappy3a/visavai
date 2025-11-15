<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('blog-categories', BlogCategoryController::class)->names('admin.blog-categories');
    Route::resource('blogs', BlogController::class)->names('admin.blogs');
});
