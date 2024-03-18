<?php
use App\Http\Controllers\Products\CreateProductController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Products\StoreProductsController;
use App\Http\Controllers\Products\EditProductsController;
use App\Http\Controllers\Products\SaveEditProductsController;
use App\Http\Controllers\Products\DeleteProductsController;
use App\Http\Middleware\auth\Authenticated;

Route::get('/products', [ProductsController::class, '__invoke'])->name('products/');

Route::get('/products/create', [CreateProductController::class, '__invoke'])->name('products/create');

Route::get('/products/edit/{products}', [EditProductsController::class, '__invoke'])->name('products/edit');
Route::put('/products/edit/{products}/save', [SaveEditProductsController::class, '__invoke'])->name('products/edit/save');

Route::middleware([Authenticated::class])->group(function () {
    Route::post('/products/store', [StoreProductsController::class, '__invoke'])->name('products/store');
    Route::delete('/products/delete/{product}', [DeleteProductsController::class, '__invoke'])->name('products/delete');
});


