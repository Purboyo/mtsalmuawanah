<?php

use App\Http\Controllers\AddPPDBController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ListppdbController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Listppdb;
use App\Models\Struktur;
use Illuminate\Support\Facades\Route;

// Website
Route::get('/', [HomeController::class, 'index']);
Route::get('/sejarah', [HomeController::class, 'sejarah']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/organisasi', [HomeController::class, 'organisasi']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/strukturorganisasi', [HomeController::class, 'struktur']);
Route::get('/dokumentasi', [HomeController::class, 'dokumentasi']);
Route::get('/fasilitasmadrasah', [HomeController::class, 'fasilitas']);
Route::get('/p5ra', [HomeController::class, 'p5ra']);
Route::get('/ppdbmtsalmuawanah', [HomeController::class, 'ppdb']);
Route::get('/prestasi', [HomeController::class, 'prestasi']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Admin Beranda
Route::resource('sliders', SlidersController::class)->middleware('auth');
Route::resource('sambutan', SambutanController::class)->middleware('auth');
Route::resource('statistik', StatistikController::class)->middleware('auth');

//Admin Profil
Route::resource('struktur', StrukturController::class)->middleware('auth');
Route::resource('fasilitas', FasilitasController::class)->middleware('auth');
Route::resource('visimisi', VisiMisiController::class)->middleware('auth');

// Admin PPDB
Route::resource('ppdb', PPDBController::class)->middleware('auth');
Route::resource('listppdb', ListppdbController::class)->middleware('auth');
Route::resource('addppdb', AddPPDBController::class)->middleware('auth');

// Admin Pendidikan
Route::resource('Prestasi', PrestasiController::class)->middleware('auth');