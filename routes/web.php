<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeStockController;

Route::get('/shoeStocks', [ShoeStockController::class, 'index']);
Route::post('/shoeStocks', [ShoeStockController::class, 'store']);
Route::get('/shoeStocks/{id}', [ShoeStockController::class, 'show']);
Route::put('/shoeStocks/{id}', [ShoeStockController::class, 'update']);
Route::delete('/shoeStocks/{id}', [ShoeStockController::class, 'destroy']);
