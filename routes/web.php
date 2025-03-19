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

Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('category', CategoryController::class);
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
