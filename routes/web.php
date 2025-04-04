<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\CapaianProfilLulusanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemetaanCplPlController;
use App\Http\Controllers\BahanKajianController;
use App\Http\Controllers\PemetaanCplBkController;
use App\Http\Controllers\MataKuliahController;

// Auth
Route::get('/', [LoginController::class, 'loginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/forgot-password', [LoginController::class, 'forgotPassword'])->name('forgot-password.post');
Route::get('/forgot-password', [LoginController::class, 'showForgotPasswordForm'])->name('forgot-password');

Route::get('/reset-password/{token}', [LoginController::class, 'showResetPasswordForm'])->name('reset-password.form');
Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('reset-password.post');

Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgotPassword'])
    ->name('validasi-forgot-password');

Route::get('/reset-password/{token}', [LoginController::class, 'showResetPasswordForm'])
    ->name('show-reset-password-form');

Route::get('/signup', [LoginController::class, 'signup'])->name('signup');

// Grup Route Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');
    Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');
    Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
    Route::get('/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])->name('jurusan.edit');
    Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
    Route::delete('/jurusan/{jurusan}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');
    Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
    Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
    Route::post('/prodi', [ProdiController::class, 'store'])->name('prodi.store');
    Route::get('/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
    Route::put('/prodi/{prodi}', [ProdiController::class, 'update'])->name('prodi.update');
    Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy'])->name('prodi.destroy');
    Route::get('/profillulusan', [ProfilLulusanController::class, 'index'])->name('profillulusan.index');
    Route::get('/profillulusan/create', [ProfilLulusanController::class, 'create'])->name('profillulusan.create');
    Route::post('/profillulusan', [ProfilLulusanController::class, 'store'])->name('profillulusan.store');
    Route::get('/profillulusan/{profillulusan}/edit', [ProfilLulusanController::class, 'edit'])->name('profillulusan.edit');
    Route::put('/profillulusan/{profillulusan}', [ProfilLulusanController::class, 'update'])->name('profillulusan.update');
    Route::delete('/profillulusan/{profillulusan}', [ProfilLulusanController::class, 'destroy'])->name('profillulusan.destroy');
    Route::get('/capaianprofillulusan', [CapaianProfilLulusanController::class, 'index'])->name('capaianprofillulusan.index');
    Route::get('/capaianprofillulusan/create', [CapaianProfilLulusanController::class, 'create'])->name('capaianprofillulusan.create');
    Route::post('/capaianprofillulusan', [CapaianProfilLulusanController::class, 'store'])->name('capaianprofillulusan.store');
    Route::get('/capaianprofillulusan/{capaianprofillulusan}/edit', [CapaianProfilLulusanController::class, 'edit'])->name('capaianprofillulusan.edit');
    Route::put('/capaianprofillulusan/{capaianprofillulusan}', [CapaianProfilLulusanController::class, 'update'])->name('capaianprofillulusan.update');
    Route::delete('/capaianprofillulusan/{capaianprofillulusan}', [CapaianProfilLulusanController::class, 'destroy'])->name('capaianprofillulusan.destroy');
    Route::get('/pemetaancplpl', [PemetaanCplPlController::class, 'index'])->name('pemetaancplpl.index');
    Route::post('/pemetaancplpl', [PemetaanCplPlController::class, 'store'])->name('pemetaancplpl.store');
    Route::get('/bahankajian', [BahankajianController::class, 'index'])->name('bahankajian.index');
    Route::get('/bahankajian/create', [BahankajianController::class, 'create'])->name('bahankajian.create');
    Route::post('/bahankajian', [BahankajianController::class, 'store'])->name('bahankajian.store');
    Route::get('/bahankajian/{bahankajian}/edit', [BahankajianController::class, 'edit'])->name('bahankajian.edit');
    Route::put('/bahankajian/{bahankajian}', [BahankajianController::class, 'update'])->name('bahankajian.update');
    Route::delete('/bahankajian/{bahankajian}', [BahankajianController::class,'destroy'])->name('bahankajian.destroy');
    Route::get('/pemetaancplbk', [PemetaanCplBkController::class, 'index'])->name('pemetaancplbk.index');
    Route::post('/pemetaancplbk', [PemetaanCplBkController::class, 'store'])->name('pemetaancplbk.store');
    Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
    Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');
});
