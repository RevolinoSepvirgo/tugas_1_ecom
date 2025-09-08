<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// halaman admin (hanya admin)
Route::get('/admin', [AuthController::class, 'admin'])->name('admin')->middleware('auth');

// halaman user (hanya user biasa)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');

// halaman utama (opsional, redirect ke login)
Route::get('/', function () {
    return redirect('/login');
});
