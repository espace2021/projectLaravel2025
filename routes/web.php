<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/myproducts', [ProductController::class, 'index'])->name('index');

Route::get('/category/{id}', [CategoryController::class, 'products'])->where('id', '[0-9]+');

Route::middleware('auth')->prefix('new')->group(function() {
    Route::get('/product', [ProductController::class, 'new']);
    Route::post('/product', [ProductController::class, 'add'])->name('new_product');
    Route::get('/category', [CategoryController::class, 'new']);
    Route::post('/category', [CategoryController::class, 'add'])->name('new_category');
 
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [TemplateController::class, 'index'])->name('index');
Route::get('/products', [TemplateController::class, 'products'])->name('products');
Route::get('/furniture', [TemplateController::class, 'furniture'])->name('furniture');
Route::get('/checkout', [TemplateController::class, 'checkout'])->name('checkout');


    
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);