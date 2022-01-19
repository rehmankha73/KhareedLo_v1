<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ADMIN Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class, 'getLogin'])->name('getLoginForm');
Route::post('/login', [LoginController::class, 'postLogin'])->name('postLoginForm');

Route::post('/logout', LogoutController::class)->middleware('login:admin')->name('logout');

//Route::


Route::get('/dashboard', static function () {
    return view('admin.dashboard');
})->middleware('login:admin')->name('dashboard');

Route::resources([
    'product-categories' => ProductCategoryController::class,
    'products' => ProductController::class,
]);
