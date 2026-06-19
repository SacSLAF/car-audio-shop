<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/shop', function () {
    return view('shop.index');
})->name('shop');

Route::get('/product/{id}', function ($id) {
    return view('shop.show');
})->name('product.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Your custom admin routes (use a different URL)
Route::middleware(['auth', 'admin'])->prefix('admin/custom')->name('admin.custom.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
