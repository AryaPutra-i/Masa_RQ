<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('profil');
});

Route::get('/program', function () {return view('program');});

Route::get('/informasi', function () {return view('informasi');});

Route::get('/ppdb', function () {return view('ppdb');});
// Route::get('/detail', function () {return view('detail');});

Route::resource('siswa', SiswaController::class);
Route::resource('guru', GuruController::class);
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/prestasi', [DashboardController::class, 'prestasi'])->name('prestasi');
Route::get('/dashboard/prestasi', [DashboardController::class, 'detail'])->name('dashboard_detail');

Route::get('/dashboard/prestasiCreate', [DashboardController::class, 'create_prestasi'])->name('prestasi_create');
Route::post('/dashboard/prestasiCreate', [DashboardController::class, 'store_prestasi'])->name('prestasi_store');

Route::get('/dashboard/{id}', [DashboardController::class, 'edit'])->name('prestasi_edit');
Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('prestasi_update');
Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('prestasi_destroy');


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


