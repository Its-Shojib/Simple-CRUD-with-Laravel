<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Show products list
Route::get('/create', [ProductController::class, 'create'])->name('products.create'); // Show create product form
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Store product data

