<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;

Route::prefix('/dashboard')->group(function(){
    //View Trang chủ
    Route::get('', [HomeController::class, 'index'])->name('admin');
    Route::get('/product', [ProductController::class, 'index'])->name('product.show');

    //Thêm sản phẩm
    Route::get('/create', [ProductController::class, 'store'])->name('admin.products.store');
    Route::post('/create', [ProductController::class, 'store'])->name('admin.products.store');

    //Chỉnh sửa sản phẩm
    Route::get('/product/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::post('/product/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');

    //Xóa sản phẩm
    Route::get('/product/{id}/delete', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});