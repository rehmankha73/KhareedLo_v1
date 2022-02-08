<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ADMIN Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';


Route::get('/dashboard', static function () {
    return view('user.dashboard');
})->middleware(['login:user', 'verified'])->name('dashboard');
