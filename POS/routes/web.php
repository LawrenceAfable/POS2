<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\POSController;

Route::get('/', function () {
    return view('dashboard.index');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Categories
// Add
Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');
// Edit
Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
// Delete
Route::delete('/category/{category}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Suppliers
// Add
Route::get('/supplier', [SupplierController::class, 'index'])->name('suppliers.index');
Route::post('/supplier', [SupplierController::class, 'store'])->name('suppliers.store');
// Edit
Route::put('/supplier/{supplier}/update', [SupplierController::class, 'update'])->name('suppliers.update');
//Delete
Route::delete('/supplier/{supplier}/destroy', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

// Products
// View
Route::get('products/{product_id}/view', [ProductController::class, 'show'])->name('products.view');
// Add 
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
// Edit 
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('products.update');
// Delete
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

// POS
Route::get('/pos', [POSController::class, 'index'])->name('pos.index');



