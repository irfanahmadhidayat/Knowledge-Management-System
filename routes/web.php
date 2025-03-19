<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\HasilPenugasanController;
use App\Http\Controllers\Rnd\RndMaterialController;
use App\Http\Controllers\Rnd\RndPenugasanController;
use App\Http\Controllers\Design\DesignMaterialController;
use App\Http\Controllers\Design\DesignPenugasanController;
use App\Http\Controllers\KebijakanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard-kebijakan/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('kebijakan', KebijakanController::class);
    Route::resource('material', MaterialController::class);
    Route::resource('penugasan', PenugasanController::class);
    Route::resource('design-material', DesignMaterialController::class);
    Route::resource('design-penugasan', DesignPenugasanController::class);
    Route::resource('rnd-material', RndMaterialController::class);
    Route::resource('rnd-penugasan', RndPenugasanController::class);

    Route::resource('hasil-penugasan', HasilPenugasanController::class);



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
