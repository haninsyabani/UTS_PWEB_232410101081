<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;

// Route untuk halaman login
Route::get('/login', [PageController::class, 'showLogin'])->name('login');
Route::post('/login', [PageController::class, 'doLogin'])->name('login.submit');

// Route untuk halaman profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Route untuk halaman dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Route untuk halaman pengelolaan barang
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

// Resource route untuk produk
Route::resource('produk', ProdukController::class);

// Route untuk logout tanpa middleware
Route::post('/logout', [PageController::class, 'logout'])->name('logout');
