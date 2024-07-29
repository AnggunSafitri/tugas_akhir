
<?php

use App\Http\Controllers\Anggota\AnggotaControler;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Anggota\GiatWebeController;
use App\Http\Controllers\Anggota\KontakWebController;
use App\Http\Controllers\Anggota\ProfilWebController;
use App\Http\Controllers\Anggota\WebController;
use App\Http\Controllers\Anggota\WeberitaController;

Route::prefix('/')->middleware('auth:anggota')->group(function () {
    
    Route::get('/', [WebController::class, 'index']);
    Route::get('webenest', [WebController::class, 'index']);
    Route::get('/weberita', [WeberitaController::class, 'index']);
    Route::post('/weberita', [WeberitaController::class, 'buatberita']);
    Route::get('/weberita/{berita}', [WeberitaController::class, 'detail']);
    Route::get('/giat_webe', [GiatWebeController::class, 'index']);
    Route::get('/giat_webe/{giat_webe}', [GiatWebeController::class, 'detail']);
    Route::get('/profil', [ProfilWebController::class, 'index']);
    Route::get('/kontak', [KontakWebController::class, 'index']);
    Route::get('/profil/{anggota}', [AnggotaControler::class, 'index']);
    Route::put('/profil/{anggota}', [AnggotaControler::class, 'update']);
});
