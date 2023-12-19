<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index']);
Route::get('/products', [ProductController::class, 'showAll']);
Route::get('/sales', [ProductController::class, 'showSales']);
Route::post('/products', [ProductController::class, 'store']);


Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::get('/products/{product}/sales', [ProductController::class, 'saleDetails'])->name('products.saleDetails');