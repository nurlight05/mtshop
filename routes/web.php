<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('mtshop.index');

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('mtshop.admin.index');
    Route::get('products', [ProductController::class, 'index'])->name('mtshop.admin.products');
    Route::get('products/create', [ProductController::class, 'create'])->name('mtshop.admin.products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('mtshop.admin.products.store');
});

// admin
// admin/products
// admin/products?type=hit
// admin/products?type=discount
// admin/products/create
// admin/products/store
// admin/products/{product}
// admin/products/{product}/edit
// admin/products/{product}/update
// admin/products/{product}/delete
