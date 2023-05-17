<?php

use App\Http\Controllers\admin\BeritaController;
use App\Http\Controllers\admin\GaleriController;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\admin\KecamatanController;
use App\Http\Controllers\admin\PegawaiController;
use App\Http\Controllers\admin\PelayananController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/kk', [App\Http\Controllers\KKController::class, 'kk']);
Route::get('/ktp', [App\Http\Controllers\KTPController::class, 'ktp']);
Route::get('/kia', [App\Http\Controllers\KIAController::class, 'kia']);

// Login and Register
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('storeLogin', [App\Http\Controllers\AuthController::class, 'storeLogin']);

    Route::get('/register', [App\Http\Controllers\AuthController::class, 'register']);
});


Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
        // Admin
        Route::get('/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
        Route::resource('/profil', ProfilController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('/berita', BeritaController::class);
        Route::resource('/kecamatan', KecamatanController::class);
        Route::resource('/pegawai', PegawaiController::class);
        Route::resource('/pelayanan', PelayananController::class);
    });

    // Kadis
    Route::group(['middleware' => ['role:kadis'], 'prefix' => 'kadis'], function () {
        Route::get('/dashboard', [App\Http\Controllers\kadis\DashboardController::class, 'index']);
    });

    Route::group(['middleware' => ['role:pengguna'], 'prefix' => 'pengguna'], function () {
        Route::get('/dashboard', [App\Http\Controllers\pengguna\DashboardController::class, 'index']);
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
