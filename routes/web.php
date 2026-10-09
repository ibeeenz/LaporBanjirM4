<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LaporBanjirController;

Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/simpan', [MahasiswaController::class, 'simpan']);
Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar']);

//praktikum
Route::get('/lapor', [LaporBanjirController::class, 'form']);
Route::post('/lapor/proses', [LaporBanjirController::class, 'simpan']);
Route::get('/daftar-laporan', [LaporBanjirController::class, 'daftar']);