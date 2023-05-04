<?php

use App\Http\Controllers\admin\BeritaController;
use App\Http\Controllers\admin\GaleriController;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\admin\KecamatanController;
use App\Http\Controllers\admin\PegawaiController;
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

// Login
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register']);

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/', [App\Http\Controllers\admin\DashboardController::class, 'index']);
Route::resource('/profil', ProfilController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/kecamatan', KecamatanController::class);
Route::resource('/pegawai', PegawaiController::class);
