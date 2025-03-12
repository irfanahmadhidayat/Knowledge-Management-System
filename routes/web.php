<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DesignController;


Route::get('/', function () {
    return view('index');
});

Route::resource('dashboard', DashboardController::class);
Route::resource('category', CategoryController::class);

Route::get('/admin/design', [DesignController::class, 'index'])->name('admin.design.index');

