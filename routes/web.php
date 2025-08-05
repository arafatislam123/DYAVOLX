<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPublicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Dev-friendly routes for easy admin access during development
|
*/

// 🔓 Auto-Login as Admin (Dev Only)
Route::get('/dev-admin', function () {
    // Only allow in local environment
    if (app()->isProduction()) {
        abort(404);
    }

    $admin = \App\Models\User::where('email', 'admin@example.com')->first();

    if (!$admin) {
        // Create admin if not exists
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'email_verified_at' => now(),
        ]);
    }

    Auth::login($admin);
    return redirect('/admin/products');
})->name('dev.admin');

// Frontend: DyavolX-Style Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Public: Products List
Route::get('/products', [ProductPublicController::class, 'index'])->name('products.index');

// Cart Routes (still require login)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Panel — No extra middleware (dev only)
    Route::prefix('admin')->as('admin.')->group(function () {
        Route::resource('products', ProductController::class);
    });
});

// Authentication Routes
require __DIR__.'/auth.php';