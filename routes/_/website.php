
<?php

use App\Http\Controllers\Web\AnggotaControler;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\GiatWebeController;
use App\Http\Controllers\Web\KontakWebController;
use App\Http\Controllers\Web\ProfilControler;
use App\Http\Controllers\Web\ProfilWebController;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Web\WeberitaController;

Route::redirect('/','webenest');
Route::get('/webenest', [WebController::class, 'index']);
Route::get('/weberita', [WeberitaController::class, 'index']);
Route::post('/weberita', [WeberitaController::class, 'buatberita']);
Route::get('/weberita/{berita}', [WeberitaController::class, 'detail']);
Route::get('/giat_webe', [GiatWebeController::class, 'index']);
Route::get('/giat_webe/{giat_webe}', [GiatWebeController::class, 'detail']);
Route::get('/profil', [ProfilWebController::class, 'index']);
Route::get('/kontak', [KontakWebController::class, 'index']);
Route::get('/anggota/{anggota}', [AnggotaControler::class, 'index']);
Route::put('/anggota/{anggota}', [AnggotaControler::class, 'update']);
