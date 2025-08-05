<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPublicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

// Register the isAdmin Gate
Gate::define('isAdmin', function ($user) {
    return $user->is_admin;
});

// Frontend: Welcome & Public Products
Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductPublicController::class, 'index'])->name('products.index');

// Dashboard (Protected)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Routes
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Admin Panel (Only for Admins)
    Route::prefix('admin')->as('admin.')->group(function () {
        Route::middleware('isAdmin')->group(function () {
            Route::resource('products', ProductController::class);
        });
    });
});

// Authentication Routes (Login, Register, etc.)
require __DIR__.'/auth.php';