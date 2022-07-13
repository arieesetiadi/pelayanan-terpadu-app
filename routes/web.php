<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::middleware('guest')->group(function () {
    // Route Login
    Route::get('/login', [LoginController::class, 'loginView'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Route Daftar
    Route::view('/daftar', 'daftar');
    Route::post('/daftar', [DaftarController::class, 'daftar']);
});

// Route Logout
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/logout/pelapor', [LoginController::class, 'logoutPelapor']);

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
Route::view('/form/lapor-sktlk', 'form.lapor-sktlk')->middleware('auth.pelapor');
Route::post('/upload-sktlk', [LaporController::class, 'uploadSKTLK']);

// Route ke form SIK
Route::view('/form/lapor-sik', 'form.lapor-sik')->middleware('auth.pelapor');
Route::post('/upload-sik', [LaporController::class, 'uploadSIK']);

// Route Profile Pelapor
Route::view('/profile/pelapor', 'profile-pelapor')->middleware('auth.pelapor');

// Route Admin ====================================
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/profile', [AdminController::class, 'profile']);
