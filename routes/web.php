<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

