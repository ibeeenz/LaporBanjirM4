<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LaporBanjirController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/simpan', [MahasiswaController::class, 'simpan']);
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar']);

// PRAKTIKUM: LaporBanjir & Autentikasi Manual

// 1. Rute Publik (Warga tetap bisa akses form tanpa harus login)
Route::get('/lapor', [LaporBanjirController::class, 'form'])->name('laporbanjir.create');
Route::post('/lapor/proses', [LaporBanjirController::class, 'simpan'])->name('laporbanjir.store');

// Rute Autentikasi Manual (Register & Login)
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// 2. Rute yang Diproteksi (Hanya bisa diakses petugas yang sudah login)
Route::middleware(['auth'])->group(function () {
    Route::get('/daftar-laporan', [LaporBanjirController::class, 'daftar'])->name('laporbanjir.index');
    
    // Halaman Profil Petugas
    Route::get('/profil', function () {
        return view('profil');
    })->name('profil');
});