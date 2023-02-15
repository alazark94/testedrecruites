<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
Route::post('/', [\App\Http\Controllers\ProductController::class, 'store']);
Route::get('/{product}', [\App\Http\Controllers\ProductController::class, 'edit']);
Route::put('/{product}', [\App\Http\Controllers\ProductController::class, 'update']);
Route::delete('/{product}', [\App\Http\Controllers\ProductController::class, 'destroy']);
