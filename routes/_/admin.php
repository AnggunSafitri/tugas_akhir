<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\GiatController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\ProfilController;

Route::prefix('/')->middleware('auth:admin')->group(function () {
    Route::get('/',[AdminController::class, 'dashboard']);
    Route::get('dashboard',[AdminController::class, 'dashboard']);
    Route::resource('admin', AdminController::class);
    Route::resource('anggota', AnggotaController::class);

    Route::resource('berita', BeritaController::class);
    Route::put('berita/post/{berita}', [BeritaController::class, 'post']);
    Route::put('berita/arsip/{berita}', [BeritaController::class, 'arsip']);

    Route::resource('giat', GiatController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('profil', ProfilController::class);
});