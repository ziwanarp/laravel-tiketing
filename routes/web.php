<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\AdminLoginController;

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
    return view('public.index');
});

Route::get('/tiket', [TiketController::class, 'index']);
Route::post('/tiket', [TiketController::class, 'store']);
Route::get('/tiket/{tiket:id_tiket}', [TiketController::class, 'show']);

Route::post('/cetak-tiket/{tiket:id_tiket}', [TiketController::class, 'cetak']);

Route::get('/cek', [TiketController::class, 'cek']);

Route::get('/login', [AdminLoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminLoginController::class, 'auth']);
Route::post('/logout', [AdminLoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/daftar-pemesan', [AdminController::class, 'pemesanan_index']);
    Route::get('/daftar-pemesan/{tiket:id_tiket}/edit', [AdminController::class, 'pemesanan_edit']);
    Route::put('/daftar-pemesan/{tiket:id_tiket}', [AdminController::class, 'pemesanan_update']);
    Route::delete('/daftar-pemesan/{tiket:id_tiket}', [AdminController::class, 'pemesanan_destroy']);

    Route::get('/check-in', [AdminController::class, 'checkin_index']);
    Route::get('/check-in/cek', [AdminController::class, 'checkin_cek']);
    Route::get('/check-in/{tiket:id_tiket}', [AdminController::class, 'checkin_show']);
    Route::post('/check-in/{tiket:id_tiket}', [AdminController::class, 'checkin_checkin']);

    Route::get('/laporan', [AdminController::class, 'laporan_index']);
});
