<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ADMIN Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

Route::get('/dashboard', static function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resources([
    'product_categories' => ProductCategoryController::class,
]);
