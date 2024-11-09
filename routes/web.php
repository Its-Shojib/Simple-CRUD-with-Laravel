<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Show products list
Route::get('/create', [ProductController::class, 'create'])->name('products.create'); // Show create product form
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Store product data

// Add these routes for edit, update, and delete
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
  