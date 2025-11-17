<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::prefix('backend')->middleware(['auth', \App\Http\Middleware\RequirePasswordChange::class])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('backend.index');
    Route::resource('blog-categories', BlogCategoryController::class)->names('backend.blog-categories');
    Route::resource('blogs', BlogController::class)->names('backend.blogs');
    Route::resource('contacts', ContactController::class)->names('backend.contacts')->only(['index', 'show', 'destroy']);
    Route::resource('users', UserController::class)->names('backend.users');
});
