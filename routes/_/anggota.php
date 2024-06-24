<?php

use App\Http\Controllers\Anggota\AnggotaController;
use App\Http\Controllers\Anggota\BeritaController;
use App\Http\Controllers\Anggota\GiatController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->middleware('auth:anggota')->group(function () {
    Route::get('/',[AnggotaController::class,'welcome']);
    Route::get('dashboard',[AnggotaController::class,'welcome']);
    Route::resource('berita-anggota', BeritaController::class);
    Route::resource('giat-anggota', GiatController::class);
});