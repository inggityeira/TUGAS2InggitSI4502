<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vgsalesController;

Route::get('/vgsales', [vgsalesController::class, 'index']);
Route::post('/vgsales', [vgsalesController::class, 'store']);
Route::get('/vgsales/{id}', [vgsalesController::class, 'show']);
Route::put('/vgsales/{id}', [vgsalesController::class, 'update']);
Route::delete('/vgsales/{id}', [vgsalesController::class, 'destroy']);