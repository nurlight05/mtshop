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
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('/', [HomeController::class, 'index'])->name('mtshop.home.index');

Route::get('/about', [AboutController::class, 'index'])->name('mtshop.about.index');

Route::get('/cart', [CartController::class, 'index'])->name('mtshop.cart.index');

Route::match(['get', 'post'], '/catalogue', [CatalogueController::class, 'index'])->name('mtshop.catalogue.index');

Route::get('/products/{product:slug}/show', [ProductController::class, 'show'])->name('mtshop.products.show');
Route::get('/products/{product:slug}/add-to-cart', [ProductController::class, 'addToCart'])->name('mtshop.products.addtocart');
Route::get('/products/{product:slug}/remove-from-cart', [ProductController::class, 'removeFromCart'])->name('mtshop.products.removefromcart');

Route::post('/search', [SearchController::class, 'index'])->name('mtshop.search.index');

Route::post('/order/store', [OrderController::class, 'store'])->name('mtshop.order.store');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('mtshop.admin.index');

    Route::get('profile', [AdminController::class, 'profile'])->name('mtshop.admin.profile');
    Route::get('profile/edit', [AdminController::class, 'edit'])->name('mtshop.admin.profile.edit');
    Route::post('profile/update', [AdminController::class, 'update'])->name('mtshop.admin.profile.update');

    Route::get('banners', [AdminBannerController::class, 'index'])->name('mtshop.admin.banners');
    Route::get('banners/{banner}/edit', [AdminBannerController::class, 'edit'])->name('mtshop.admin.banners.edit');
    Route::post('banners/{banner}/update', [AdminBannerController::class, 'update'])->name('mtshop.admin.banners.update');

    Route::get('products', [AdminProductController::class, 'index'])->name('mtshop.admin.products');
    Route::get('products/create', [AdminProductController::class, 'create'])->name('mtshop.admin.products.create');
    Route::post('products/store', [AdminProductController::class, 'store'])->name('mtshop.admin.products.store');
    Route::get('products/{slug}/show', [AdminProductController::class, 'show'])->name('mtshop.admin.products.show');
    Route::get('products/{slug}/edit', [AdminProductController::class, 'edit'])->name('mtshop.admin.products.edit');
    Route::post('products/{slug}/update', [AdminProductController::class, 'update'])->name('mtshop.admin.products.update');
    Route::get('products/{slug}/delete', [AdminProductController::class, 'delete'])->name('mtshop.admin.products.delete');
    Route::post('products/all/submit', [AdminProductController::class, 'submit'])->name('mtshop.admin.products.submit');
    Route::post('products/image/{id}/delete', [AdminProductController::class, 'submit'])->name('mtshop.admin.products.image.delete');

    Route::get('orders', [AdminOrderController::class, 'index'])->name('mtshop.admin.orders');
    Route::get('orders/{id}/show', [AdminOrderController::class, 'show'])->name('mtshop.admin.orders.show');
    Route::get('orders/{id}/delete', [AdminOrderController::class, 'delete'])->name('mtshop.admin.orders.delete');

    Route::get('categories', [AdminCategoryController::class, 'index'])->name('mtshop.admin.categories');
    Route::get('categories/create', [AdminCategoryController::class, 'create'])->name('mtshop.admin.categories.create');
    Route::post('categories/store', [AdminCategoryController::class, 'store'])->name('mtshop.admin.categories.store');
    Route::get('categories/{slug}/show', [AdminCategoryController::class, 'show'])->name('mtshop.admin.categories.show');
    Route::get('categories/{slug}/edit', [AdminCategoryController::class, 'edit'])->name('mtshop.admin.categories.edit');
    Route::post('categories/{slug}/update', [AdminCategoryController::class, 'update'])->name('mtshop.admin.categories.update');
    Route::get('categories/{category}/delete', [AdminCategoryController::class, 'delete'])->name('mtshop.admin.categories.delete');
    Route::post('categories/all/submit', [AdminCategoryController::class, 'submit'])->name('mtshop.admin.categories.submit');
    Route::get('categories/attributes/get', [AdminCategoryController::class, 'getAttributes'])->name('mtshop.admin.categories.attributes');

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

require __DIR__.'/auth.php';
