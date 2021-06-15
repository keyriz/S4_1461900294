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

Route::resource('dokter-294', DokterController::class);

Route::resource('kamar-294', KamarController::class);

Route::resource('pasien-294', PasienController::class);

Route::resource('user-294', UserBukuController::class);
