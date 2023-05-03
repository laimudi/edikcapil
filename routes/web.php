<?php

use App\Http\Controllers\admin\BeritaController;
use App\Http\Controllers\admin\GaleriController;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\KecamatanController;
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

Route::get('/', function () {
    return view('app');
});
Route::get('/', [App\Http\Controllers\admin\DashboardController::class, 'index']);
Route::resource('/profil', ProfilController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('/berita', BeritaController::class);
Route::resource('/kecamatan', KecamatanController::class);
