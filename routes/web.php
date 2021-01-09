<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('mtshop.index');

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('mtshop.admin.index');

    Route::get('banners', [AdminBannerController::class, 'index'])->name('mtshop.admin.banners');

    Route::get('products', [AdminProductController::class, 'index'])->name('mtshop.admin.products');
    Route::get('products/create', [AdminProductController::class, 'create'])->name('mtshop.admin.products.create');
    Route::post('products/store', [AdminProductController::class, 'store'])->name('mtshop.admin.products.store');
    Route::get('products/{slug}/show', [AdminProductController::class, 'show'])->name('mtshop.admin.products.show');
    Route::get('products/{slug}/edit', [AdminProductController::class, 'edit'])->name('mtshop.admin.products.edit');
    Route::post('products/{slug}/update', [AdminProductController::class, 'update'])->name('mtshop.admin.products.update');
    Route::get('products/{slug}/delete', [AdminProductController::class, 'delete'])->name('mtshop.admin.products.delete');
    Route::post('products/all/submit', [AdminProductController::class, 'submit'])->name('mtshop.admin.products.submit');

    Route::get('orders', [AdminOrderController::class, 'index'])->name('mtshop.admin.orders');
    Route::get('orders/{id}/show', [AdminOrderController::class, 'show'])->name('mtshop.admin.orders.show');
    Route::get('orders/{id}/delete', [AdminOrderController::class, 'delete'])->name('mtshop.admin.orders.delete');

    Route::get('categories', [AdminCategoryController::class, 'index'])->name('mtshop.admin.categories');
    Route::get('categories/create', [AdminCategoryController::class, 'create'])->name('mtshop.admin.categories.create');
    Route::post('categories/store', [AdminCategoryController::class, 'store'])->name('mtshop.admin.categories.store');
    Route::get('categories/{slug}/show', [AdminCategoryController::class, 'show'])->name('mtshop.admin.categories.show');
    Route::get('categories/{slug}/edit', [AdminCategoryController::class, 'edit'])->name('mtshop.admin.categories.edit');
    Route::post('categories/{slug}/update', [AdminCategoryController::class, 'update'])->name('mtshop.admin.categories.update');
    Route::get('categories/{slug}/delete', [AdminCategoryController::class, 'delete'])->name('mtshop.admin.categories.delete');
});

// admin

// admin/banners

// admin/products
// admin/products?type=hit
// admin/products?type=discount
// admin/products/create
// admin/products/store
// admin/products/{product}/show
// admin/products/{product}/edit
// admin/products/{product}/update
// admin/products/{product}/delete
// admin/products/all/submit

// admin/orders
// admin/orders?type=new
// admin/orders/{order}/show
// admin/orders/{order}/delete

// admin/categories
// admin/categories/create
// admin/categories/store
// admin/categories/{category}/show
// admin/categories/{category}/edit
// admin/categories/{category}/update
// admin/categories/{category}/delete