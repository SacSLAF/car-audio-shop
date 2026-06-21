<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceBookingController;
use App\Http\Controllers\GalleryController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('gallery.show');

Route::get('/shop', function () {
    return view('shop.index');
})->name('shop');

// Product Routes
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/category/{slug}', [ProductController::class, 'category'])->name('category.show');
Route::get('/brand/{slug}', [ProductController::class, 'brand'])->name('brand.show');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/book-service', [ServiceBookingController::class, 'index'])->name('service-booking.index');
Route::post('/book-service', [ServiceBookingController::class, 'store'])->name('service-booking.store');
Route::get('/book-service/thankyou', [ServiceBookingController::class, 'thankYou'])->name('service-booking.thankyou');

// Your custom admin routes (use a different URL)
Route::middleware(['auth', 'admin'])->prefix('admin/custom')->name('admin.custom.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
