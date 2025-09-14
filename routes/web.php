<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Middleware\RoleMiddleware;




// AUTH

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
        // Route dashboard admin
    Route::get('/admin/dashboard', function () {
        return view('menus.dashboard');
    })->name('menus.dashboard');
      Route::get('menus', [MenuController::class, 'index'])->name('menus.index');

    // CRUD menus
    Route::resource('menus', MenuController::class)->except(['index']);


});




// halaman utama (opsional, redirect ke login)
Route::get('/', function () {
    return redirect('/login');
});
