<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarsController::class, 'create']);
Route::post('/cars/create', [CarsController::class, 'save']);