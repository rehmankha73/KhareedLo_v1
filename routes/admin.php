<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ADMIN Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', static function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resources([
    'product_categories' => ProductCategoryController::class,
    'products' => ProductController::class,
]);
