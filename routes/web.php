<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController as AdminProductController; 
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('landing');
    })->name('landing');

    Route::get('/dashboard', function () {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.products.index');
        }
        return view('admin.dashboard'); 
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('products', AdminProductController::class);
        Route::resource('users', UserController::class);
        Route::resource('categories', CategoryController::class);
    });

    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/keyboards', [ProductController::class, 'keyboards'])->name('keyboards');
        Route::get('/laptops', [ProductController::class, 'laptops'])->name('laptops');
        Route::get('/{product}', [ProductController::class, 'show'])->name('show'); 
    });
    // Cart routes
    Route::post('/cart/add/{product}', [ProductController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
});

require __DIR__ . '/auth.php';
