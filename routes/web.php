<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\UserController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Client\CartController;
use App\Http\Middleware\EnsureCartByAuthenticationUSer;

Route::prefix('/')->group(function () {
    //View Trang chủ
    Route::get('', [HomeController::class, 'index'])->name('home');
    //View Login & Register
    Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');
    Route::match(['get', 'post'], '/register', [UserController::class, 'register'])->name('register');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//View Product
Route::prefix('/product')->group(function(){
    Route::get('', [ProductController::class, 'index'])->name('product');
    Route::get('/{id}', [ProductController::class, 'detail']);
});

//View Cart
Route::middleware(EnsureCartByAuthenticationUSer::class)->group(function () {

    Route::prefix('/cart')->group(function(){
        Route::get('', [CartController::class, 'index'])->name('cart');
        Route::post('/add', [CartController::class, 'add'])->name('cart.add');
        Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
        Route::post('/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    });
});    
