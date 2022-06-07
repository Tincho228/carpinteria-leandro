<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('products', ProductController::class)->names('admin.products');