<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SisanduController;
use App\Http\Controllers\SilayaController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ManageMedisController;
use App\Http\Controllers\ManageKlinikController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginProcess', [AuthController::class, 'loginProcess'])->name('loginProcess');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerProcess', [AuthController::class, 'registerProcess'])->name('registerProcess');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth:web,medis']], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/getprofil', [AuthController::class, 'getprofil'])->name('getprofil');

    
    Route::get('/daftarSisandu', [SisanduController::class, 'daftarSisandu'])->name('daftarSisandu');
    Route::post('/daftarSisandu/daftarOnlineProccess', [SisanduController::class, 'daftarOnlineProccess'])->name('daftarOnlineProccess');
    Route::get('/daftarSisandu/daftarAnak', [SisanduController::class, 'daftarAnak'])->name('daftarAnak');
    Route::post('/daftarSisandu/daftarAnak', [SisanduController::class, 'daftarAnakProcess'])->name('daftarAnakProcess');


    Route::get('/jadwalImunisasi', [SisanduController::class, 'jadwalImunisasi'])->name('jadwalImunisasi');
    
    Route::get('/daftarSilaya', [SilayaController::class, 'daftarSilaya'])->name('daftarSilaya');
    
    Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
        Route::get('/getuser', [ManageUserController::class, 'getuser'])->name('getUser');
        Route::get('/getmedis', [ManageMedisController::class, 'getmedis'])->name('getMedis');
        Route::get('/getklinik', [ManageKlinikController::class, 'getklinik'])->name('getKlinik');

    });
});