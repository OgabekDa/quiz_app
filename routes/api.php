<?php

use App\Http\Controllers\CategoriyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/random_code', TestController::class)->name('invok');

Route::post('/categories', [CategoriyController::class, 'store']);
Route::post('/registratsiya', [TestController::class, 'registratsiya']);
