<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelaporController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

// Route Login
Route::view('/login', 'login')->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route Daftar
Route::view('/daftar', 'daftar');
Route::post('/daftar', [DaftarController::class, 'daftar']);

// Route Logout
Route::get('/logout', [LoginController::class, 'logout']);

// Route ke Visi & Misi
Route::view('/visimisi', 'visimisi');

// Route ke Sejarah
Route::view('/sejarah', 'sejarah');

// Route ke Tentang Polri
Route::view('/tentangpolri', 'tentangpolri');

// Route ke Kontak
Route::view('/kontak', 'kontak');

// Route ke SKTLK
Route::view('/pengaduan-masyarakat/sktlk', 'pengaduan-masyarakat.sktlk');

// Route ke Surat Ijin Keramaian
Route::view('/pengaduan-masyarakat/sik', 'pengaduan-masyarakat.sik');

// Route ke Surat Tanda Terima Lapor Polisi
Route::view('/pengaduan-masyarakat/sttlp', 'pengaduan-masyarakat.sttlp');

// Route ke Tindak Kriminal
Route::view('/tindak-kriminal', 'tindak-kriminal.tindak-kriminal');

// Route ke SP2HP
Route::view('/tindak-kriminal/sp2hp', 'tindak-kriminal.sp2hp');

// Route ke SP2HP
Route::view('/tindak-kriminal/sttlp', 'tindak-kriminal.sttlp');

// Route ke form SKTLK
Route::view('/form/lapor-sktlk', 'form.lapor-sktlk')->middleware('auth');

// Route ke form SIK
Route::view('/form/lapor-sik', 'form.lapor-sik')->middleware('auth');
Route::post('/upload-sik', [LaporController::class, 'uploadSIK'])->name('upload-sik');


// Route Admin ====================================
Route::get('/dashboard', [AdminController::class, 'dashboard']);
