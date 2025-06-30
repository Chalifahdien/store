<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/', function () {
        return view('pages.kasir.index');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index.dashboard');
    Route::get('/produk', [ProdukController::class, 'index'])->name('index.dashboard');

    // User 
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::put('/user/reset/{id}', [UserController::class, 'reset'])->name('user.reset');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});
