<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserBukuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('dokter/destroy', [DokterController::class, 'import'])->name('dokter.destroy');
Route::get('dokter/import', [DokterController::class, 'import'])->name('dokter.import');

Route::get('kamar', [KamarController::class, 'index'])->name('kamar.index');
Route::get('kamar/destroy', [KamarController::class, 'import'])->name('kamar.destroy');
Route::get('kamar/import', [KamarController::class, 'import'])->name('kamar.import');

Route::get('pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('pasien/destroy', [PasienController::class, 'import'])->name('pasien.destroy');
Route::get('pasien/import', [PasienController::class, 'import'])->name('pasien.import');

Route::get('user', [UserBukuController::class, 'index'])->name('user.index');
Route::get('user/destroy', [UserBukuController::class, 'import'])->name('user.destroy');
Route::get('user/import', [UserBukuController::class, 'import'])->name('user.import');
