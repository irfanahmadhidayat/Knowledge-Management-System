<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('index');
});

Route::resource('dashboard', DashboardController::class);
Route::resource('category', CategoryController::class);
