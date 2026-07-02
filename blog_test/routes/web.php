<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('home', [HomeController::class, 'index'])->name("home");

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('categories', [CategoryController::class, 'index'])->name('categories');
Route::get('category/{id}', [CategoryController::class, 'view'])->name('category');

Route::get('all-categories', [CategoryController::class, 'admin'])->name('all-categories');
Route::get('all-posts', [PostController::class, 'admin'])->name('all-posts');
// Route::get('all-users', [UserController::class, 'admin'])->name('all-users');

Route::get('create-category', [CategoryController::class, 'create'])->name('create-category');

Route::post('store-category', [CategoryController::class, 'store'])->name('store-category');

Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('edit-category');

Route::post('update-category', [CategoryController::class, 'update'])->name('update-category');


Route::post('delete-category', [CategoryController::class, 'destroy'])->name('delete-category');

Route::post('store-contact', [ContactController::class, 'store']);
Route::get('blog/{id}', [PostController::class, 'index'])->name('blog');

Route::get('post/{id}', [PostController::class, 'index'])->name('post');

Route::get('left-sidebar', function () {
    return view('client.pages.standard-left-sidebar');
})->name('left-sidebar');

Route::get('right-sidebar', function () {
    return view('client.pages.standard-right-sidebar');
})->name('right-sidebar');

Route::get('audio', function () {
    return view('client.pages.post-audio');
})->name('audio');

Route::get('gallery', function () {
    return view('client.pages.post-gallery');
})->name('gallery');

Route::get('image', function () {
    return view('client.pages.post-image');
})->name('image');

Route::get('video', function () {
    return view('client.pages.post-video');
})->name('video');

Route::get('link', function () {
    return view('client.pages.post-link');
})->name('link');


Route::get('view', function () {
    view('client.pages.view');
})->name('view');
