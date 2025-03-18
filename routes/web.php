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

//Materi Percetakan
Route::get('/admin/percetakan/inputanggota/tambahanggota', function () {
    return view('admin.percetakan.inputanggota.tambahanggota');
})->name('admin.percetakan.inputanggota.tambahanggota');

//Materi Percetakan
Route::get('/admin/percetakan/materi', function () {
    return view('admin.percetakan.materi');
})->name('admin.percetakan.materi');

//Kebijakan Percetakan
Route::get('/admin/percetakan/kebijakan', function () {
    return view('admin.percetakan.kebijakan');
})->name('admin.percetakan.kebijakan');

//Index Materi Percetakan
Route::get('/admin/percetakan/inputmateri/index', function () {
    return view('admin.percetakan.inputmateri.index');
})->name('admin.percetakan.inputmateri.index');

//Tambah Materi Percetakan
Route::get('/admin/percetakan/inputmateri/tambahmateri', function () {
    return view('admin.percetakan.inputmateri.tambahmateri');
})->name('admin.percetakan.inputmateri.tambahmateri');

//Tambah Modul Percetakan
Route::get('/admin/percetakan/inputmateri/inputmodul/tambahmodul', function () {
    return view('admin.percetakan.inputmateri.inputmodul.tambahmodul');
})->name('admin.percetakan.inputmateri.inputmodul.tambahmodul');

//Tambah Praktik Percetakan
Route::get('/admin/percetakan/inputmateri/inputmodul/tambahpraktik', function () {
    return view('admin.percetakan.inputmateri.inputmodul.tambahpraktik');
})->name('admin.percetakan.inputmateri.inputmodul.tambahpraktik');

Route::get('/admin/design/inputmateri/index', function () {
    return view('admin.design.inputmateri.index');
})->name('admin.design.inputmateri.index');
