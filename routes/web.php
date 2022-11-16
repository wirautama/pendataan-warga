<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KartukeluargaController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ProfileController;

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
    return view('login.v_login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registration', [RegistrationController::class, 'index'])->name('registration')->middleware('guest');
Route::post('/registration/register', [RegistrationController::class, 'register'])->middleware('guest');

Route::group(['middleware' => ['auth']], function(){
    // Halaman Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Halaman Warga
    Route::get('/warga', [WargaController::class, 'index'])->name('warga');
    Route::get('/warga/detail/{nik_warga}', [WargaController::class, 'detail']);
    Route::get('/warga/add', [WargaController::class, 'add']);
    Route::post('/warga/insert', [WargaController::class, 'insert']);
    Route::get('/warga/edit/{nik_warga}', [WargaController::class, 'edit']);
    Route::post('/warga/update/{nik_warga}', [WargaController::class, 'update']);
    Route::get('/warga/delete/{nik_warga}', [WargaController::class, 'delete']);

    Route::get('/warga/cetaklaporan', [WargaController::class, 'cetaklaporan'])->name('cetaklaporan');
    Route::get('/warga/cetaklaporan/printlaporan', [WargaController::class, 'printlaporan'])->name('printlaporan');
    Route::get('/warga/cetaklaporan/downloadlaporanpdf', [WargaController::class, 'downloadlaporanpdf'])->name('downloadlaporanpdf');

    Route::get('/warga/cetakwarga/{nik_warga}', [WargaController::class, 'cetakwarga'])->name('cetakwarga');
    Route::get('/warga/printdatawarga/{nik_warga}', [WargaController::class, 'printdatawarga'])->name('printdatawarga');
    Route::get('/warga/downloadpdfwarga/{nik_warga}', [WargaController::class, 'downloadpdfwarga'])->name('downloadpdfwarga');


    // Halaman KartuKeluarga
    Route::get('/kartukeluarga', [KartukeluargaController::class, 'index'])->name('kartukeluarga');
    Route::get('/kartukeluarga/detail/{nomor_keluarga}', [KartukeluargaController::class, 'detail']);
    Route::get('/kartukeluarga/add', [KartukeluargaController::class, 'add']);
    Route::post('/kartukeluarga/insert', [KartukeluargaController::class, 'insert']);
    Route::get('/kartukeluarga/editAnggota/{nomor_keluarga}', [KartukeluargaController::class, 'editAnggota']);
    Route::post('/kartukeluarga/updateAnggota/{nomor_keluarga}', [KartukeluargaController::class, 'updateAnggota'])->name('updateAnggota');
    Route::get('/kartukeluarga/edit/{nomor_keluarga}', [KartukeluargaController::class, 'edit']);
    Route::post('/kartukeluarga/update/{nomor_keluarga}', [KartukeluargaController::class, 'update']);
    Route::get('/kartukeluarga/delete/{nomor_keluarga}', [KartukeluargaController::class, 'delete']);

    Route::get('/kartukeluarga/cetakkartukeluarga/{nomor_keluarga}', [KartukeluargaController::class, 'cetakkartukeluarga']);
    Route::get('/kartukeluarga/cetakkartukeluarga/print/{nomor_keluarga}', [KartukeluargaController::class, 'print'])->name('print');
    Route::get('/kartukeluarga/cetakkartukeluarga/downloadkkpdf/{nomor_keluarga}', [KartukeluargaController::class, 'downloadkkpdf'])->name('downloadkkpdf');
    
    Route::get('/kartukeluarga/cetaklaporankk', [KartukeluargaController::class, 'cetaklaporankk'])->name('cetaklaporankk');
    Route::get('/kartukeluarga/cetaklaporankk/printlaporankk', [KartukeluargaController::class, 'printlaporankk'])->name('printlaporankk');
    Route::get('/kartukeluarga/cetaklaporankk/downloadlaporankkpdf', [KartukeluargaController::class, 'downloadlaporankkpdf'])->name('downloadlaporankkpdf');
    


    // Halaman Mutasi
    Route::get('/mutasi', [MutasiController::class, 'index'])->name('mutasi');
    Route::get('/mutasi/add/{nik_warga}', [WargaController::class, 'mutasi']);
    Route::post('/mutasi/insert/{nik_warga}', [MutasiController::class, 'insert']);
    Route::get('/mutasi/detail/{nik_mutasi}', [MutasiController::class, 'detail']);
    Route::get('/mutasi/delete/{nik_mutasi}', [MutasiController::class, 'delete']);
    Route::get('/mutasi/cetaklaporanmutasi', [MutasiController::class, 'cetaklaporanmutasi']);
    Route::get('/mutasi/cetaklaporanmutasi/downloadlaporanmutasi', [MutasiController::class, 'downloadlaporanmutasi']);
    Route::get('/mutasi/cetaklaporanmutasi/printlaporanmutasi', [MutasiController::class, 'printlaporanmutasi']);


    // Halaman User
    Route::resource('/user', AdminCategoryController::class)->except('show')->middleware('Admin');
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/detail/{id_user}', [UserController::class, 'detail']);
    Route::get('/user/add', [UserController::class, 'add']);
    Route::post('/user/insert', [UserController::class, 'insert']);
    Route::get('/user/edit/{id_user}', [UserController::class, 'edit']);
    Route::post('/user/update/{id_user}', [UserController::class, 'update']);
    Route::get('/user/delete/{id_user}', [UserController::class, 'delete']);


    // Halaman Admin

    Route::get('/profile', [ProfileController::class, 'index']);

}); 





