<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::resource('/', IndexController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
