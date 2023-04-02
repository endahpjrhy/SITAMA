<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'actionLogin']);
Route::get('/reloadCaptcha', [LoginController::class, 'reloadCaptcha']);

Route::get('/registrasi', [RegisterController::class, 'index']);
Route::post('/registrasi', [RegisterController::class, 'registrasi']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::post('/prosesupdateprofile', [DashboardController::class, 'prosesupdateprofile']);

    
    Route::group(['middleware' => ['checkRole:2']], function () {
        Route::get('/form-magang', [SiswaController::class, 'formMagang']);
        Route::post('/prosesdaftarmagang', [SiswaController::class, 'prosesdaftarmagang']);
        Route::get('/status_pengajuan', [SiswaController::class, 'statuspengajuan']);
        Route::get('/hasil_projek', [SiswaController::class, 'hasilprojek']);
        Route::post('/kirimhasilprojek', [SiswaController::class, 'kirimhasilprojek']);
        Route::get('/ndeloksubbidang', [SiswaController::class, 'ndeloksubbidang']);
        
    });

    Route::group(['middleware' => ['checkRole:1']], function () {
        Route::get('/grafik', [AdminController::class, 'index']);
        Route::get('/data_peserta', [AdminController::class, 'datapeserta']);
        Route::get('/data_peserta/export', [AdminController::class, 'exportpeserta']);
        Route::post('/data_peserta/ubahstatus', [AdminController::class, 'ubahstatuspeserta']);
        Route::get('/data_peserta/{id}', [AdminController::class, 'showdatapeserta']);
        Route::get('/daftarhasilprojek', [AdminController::class, 'daftarhasilprojek']);
        Route::get('/daftarhasilprojek/{id}', [AdminController::class, 'lihatprojekpeserta']);
        Route::resource('bidang', BidangController::class);
    });
});
