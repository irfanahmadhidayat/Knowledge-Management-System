<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Division\DesignController;
use App\Http\Controllers\Admin\Division\PercetakanController;



Route::get('/', function () {
    return view('index');
});

Route::resource('dashboard', DashboardController::class);
Route::resource('category', CategoryController::class);

Route::get('/admin/design', [DesignController::class, 'index'])->name('admin.design.index');
Route::get('/admin/percetakan', [PercetakanController::class, 'index'])->name('admin.percetakan.index');

Route::get('/admin/design/materi', function () {
    return view('admin.design.materi');
})->name('admin.design.materi');

Route::get('/admin/design/kebijakan', function () {
    return view('admin.design.kebijakan');
})->name('admin.design.kebijakan');
