<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\CsvController;

// Rutas
Route::apiResource('hello', HelloWorldController::class);
Route::apiResource('csv', CsvController::class);

