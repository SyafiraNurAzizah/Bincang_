<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Rute autentikasi
Auth::routes();

// Rute untuk halaman setelah login
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
