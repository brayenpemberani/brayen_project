<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LingkunganController;

use Livewire\Volt\Volt;

// Route untuk menampilkan daftar produk
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route untuk menampilkan detail produk
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});
Route::view('/', 'home')->name('home');
Route::view('/daur_ulang', 'daur_ulang')->name('daur_ulang');
Route::view('/perubahan_iklim', 'perubahan_iklim')->name('perubahan_iklim');
Route::view('/konservasi', 'konservasi')->name('konservasi');