<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/add', [CarController::class, 'add']);
Route::get('/cars/about', [CarController::class, 'about']);
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/{id}', [CarController::class, 'show']);
Route::get('/cars/{id}/edit', [CarController::class, 'edit']);
Route::patch('/cars', [CarController::class, 'update'])->name('cars.update');
Route::delete('/cars', [CarController::class, 'destroy'])->name('cars.destroy');
