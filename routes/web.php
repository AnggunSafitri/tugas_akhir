<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// admin
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
// Route::get('register', [HomeController::class, 'register']);


Route::prefix('admin')->group(function(){
    include "_/admin.php";
});

Route::prefix('anggota')->group(function(){
    include "_/anggota.php";
});

Route::prefix('/')->group(function(){
    include "_/website.php";
});



//web
