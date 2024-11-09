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
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::put('/product/{product}','update')->name('product.update');
Route::delete('/product/{product}','destroy')->name('product.destroy');   