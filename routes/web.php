<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/category/{id}', [CategoryController::class, 'products'])->where('id', '[0-9]+');

Route::prefix('new')->group(function() {
    Route::get('/product', [ProductController::class, 'new']);
    Route::post('/product', [ProductController::class, 'add'])->name('new_product');
    Route::get('/category', [CategoryController::class, 'new']);
    Route::post('/category', [CategoryController::class, 'add'])->name('new_category');
});
