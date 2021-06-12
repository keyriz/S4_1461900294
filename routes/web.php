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

Route::resource('dokter', DokterController::class);
// Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
// Route::get('dokter/destroy', [DokterController::class, 'destroy'])->name('dokter.destroy');
// Route::get('dokter/import', [DokterController::class, 'import'])->name('dokter.import');
// Route::get('dokter/store', [DokterController::class, 'store'])->name('dokter.store');

Route::resource('kamar', KamarController::class);
// Route::get('kamar', [KamarController::class, 'index'])->name('kamar.index');
// Route::get('kamar/destroy', [KamarController::class, 'destroy'])->name('kamar.destroy');
// Route::get('kamar/import', [KamarController::class, 'import'])->name('kamar.import');
// Route::get('kamar/store', [KamarController::class, 'store'])->name('kamar.store');

Route::resource('pasien', PasienController::class);
// Route::get('pasien', [PasienController::class, 'index'])->name('pasien.index');
// Route::get('pasien/destroy', [PasienController::class, 'destroy'])->name('pasien.destroy');
// Route::get('pasien/import', [PasienController::class, 'import'])->name('pasien.import');
// Route::get('pasien/store', [PasienController::class, 'store'])->name('pasien.store');

Route::resource('user', UserBukuController::class);
// Route::get('user', [UserBukuController::class, 'index'])->name('user.index');
// Route::get('user/destroy', [UserBukuController::class, 'destroy'])->name('user.destroy');
// Route::get('user/import', [UserBukuController::class, 'import'])->name('user.import');
// Route::get('user/store', [UserBukuController::class, 'store'])->name('user.store');
