<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Menu
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu/category/{slug}', [MenuController::class, 'category'])->name('menu.category');
Route::get('/menu/product/{slug}', [MenuController::class, 'product'])->name('menu.product');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Location
Route::get('/location', function () {
    return view('location');
})->name('location');