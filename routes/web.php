<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminBannerController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminMeasureController;
use App\Http\Controllers\Admin\AdminAttributeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('mtshop.home.index');

Route::get('/about', [AboutController::class, 'index'])->name('mtshop.about.index');

Route::get('/cart', [CartController::class, 'index'])->name('mtshop.cart.index');

Route::get('/catalogue', [CatalogueController::class, 'index'])->name('mtshop.catalogue.index');

Route::get('/products/product', [ProductController::class, 'show'])->name('mtshop.products.show');

Route::post('/search', [SearchController::class, 'index'])->name('mtshop.search.index');

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
    Route::post('categories/all/submit', [AdminCategoryController::class, 'submit'])->name('mtshop.admin.categories.submit');

    Route::get('measures', [AdminMeasureController::class, 'index'])->name('mtshop.admin.measures');
    Route::get('measures/create', [AdminMeasureController::class, 'create'])->name('mtshop.admin.measures.create');
    Route::post('measures/store', [AdminMeasureController::class, 'store'])->name('mtshop.admin.measures.store');
    Route::get('measures/{id}/show', [AdminMeasureController::class, 'show'])->name('mtshop.admin.measures.show');
    Route::get('measures/{id}/edit', [AdminMeasureController::class, 'edit'])->name('mtshop.admin.measures.edit');
    Route::post('measures/{id}/update', [AdminMeasureController::class, 'update'])->name('mtshop.admin.measures.update');
    Route::get('measures/{id}/delete', [AdminMeasureController::class, 'delete'])->name('mtshop.admin.measures.delete');
    Route::post('measures/all/submit', [AdminMeasureController::class, 'submit'])->name('mtshop.admin.measures.submit');

    Route::get('attributes', [AdminAttributeController::class, 'index'])->name('mtshop.admin.attributes');
    Route::get('attributes/create', [AdminAttributeController::class, 'create'])->name('mtshop.admin.attributes.create');
    Route::post('attributes/store', [AdminAttributeController::class, 'store'])->name('mtshop.admin.attributes.store');
    Route::get('attributes/{id}/show', [AdminAttributeController::class, 'show'])->name('mtshop.admin.attributes.show');
    Route::get('attributes/{id}/edit', [AdminAttributeController::class, 'edit'])->name('mtshop.admin.attributes.edit');
    Route::post('attributes/{id}/update', [AdminAttributeController::class, 'update'])->name('mtshop.admin.attributes.update');
    Route::get('attributes/{id}/delete', [AdminAttributeController::class, 'delete'])->name('mtshop.admin.attributes.delete');
    Route::post('attributes/all/submit', [AdminAttributeController::class, 'submit'])->name('mtshop.admin.attributes.submit');
});

// mtshop/
// about
// 





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