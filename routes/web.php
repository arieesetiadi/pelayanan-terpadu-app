<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\Lapor\SIKController;
use App\Http\Controllers\Lapor\SKTLKController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SP2HPController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('beranda');
});

// Route Login
Route::get('/login', [LoginController::class, 'loginView'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route Daftar
Route::view('/daftar', 'daftar');
Route::post('/daftar', [DaftarController::class, 'daftar']);

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

// Auth Pelapor
Route::middleware('auth.pelapor')->group(function () {
	// Route ke form SKTLK
	Route::view('/form/lapor-sktlk', 'form.lapor-sktlk');
	Route::post('/upload-sktlk', [SKTLKController::class, 'upload']);
	Route::post('/download-pernyataan-sktlk', [SKTLKController::class, 'downloadPernyataan']);

	// Route ke form SIK
	Route::view('/form/lapor-sik', 'form.lapor-sik');
	Route::post('/upload-sik', [SIKController::class, 'upload']);
	Route::post('/upload-form-sik', [SIKController::class, 'uploadForm']);
	Route::post('/download-pernyataan-sik', [SIKController::class, 'downloadPernyataan']);

	// Route SP2HP
	Route::view('/form/lapor-sp2hp', 'form.lapor-sp2hp');
	Route::post('/lapor-sp2hp', [SP2HPController::class, 'lapor']);

	// Route Profile Pelapor
	Route::view('/profile/pelapor', 'profile-pelapor');
});

// Route Notifikasi
Route::get('/notifikasi/detail/{id}', [NotifikasiController::class, 'detail']);
Route::get('/notifikasi/cetak-pdf/{id}', [NotifikasiController::class, 'cetakPDF']);

// Route Admin ====================================
Route::middleware('auth')->group(function () {
	Route::get('/dashboard', [AdminController::class, 'dashboard']);
	Route::get('/profile', [AdminController::class, 'profile']);

	Route::get('/admin/sktlk', [SKTLKController::class, 'index']);
	Route::post('/admin/sktlk/upload-file', [SKTLKController::class, 'uploadFile']);
	Route::get('/admin/sktlk/hapus/{id}', [SKTLKController::class, 'hapus']);
	Route::post('/admin/sktlk/filter-date', [SKTLKController::class, 'filterDate']);
	Route::post('/admin/sktlk/pdf', [SKTLKController::class, 'pdf']);
	Route::post('/admin/sktlk/excel', [SKTLKController::class, 'excel']);

	Route::get('/admin/sik', [SIKController::class, 'index']);
	Route::get('/admin/sik/setuju/{id}', [SIKController::class, 'setuju']);
	Route::post('/admin/sik/upload-file', [SIKController::class, 'uploadFile']);
	Route::post('/admin/sik/tolak', [SIKController::class, 'tolak']);
	Route::get('/admin/sik/hapus/{id}', [SIKController::class, 'hapus']);
	Route::post('/admin/sik/filter-date', [SIKController::class, 'filterDate']);
	Route::post('/admin/sik/pdf', [SIKController::class, 'pdf']);
	Route::post('/admin/sik/excel', [SIKController::class, 'excel']);

	Route::get('/admin/sp2hp', [SP2HPController::class, 'index']);
	Route::get('/admin/sp2hp/hapus/{id}', [SP2HPController::class, 'hapus']);
	Route::get('/admin/sp2hp/valid/{id}', [SP2HPController::class, 'valid']);
	Route::get('/admin/sp2hp/selesai/{id}', [SP2HPController::class, 'selesai']);
	Route::post('/admin/sp2hp/invalid', [SP2HPController::class, 'invalid']);
	Route::post('/admin/sp2hp/upload-keterangan', [SP2HPController::class, 'uploadKeterangan']);
	Route::post('/admin/sp2hp/filter-date', [SP2HPController::class, 'filterDate']);
	Route::post('/admin/sp2hp/pdf', [SP2HPController::class, 'pdf']);
	Route::post('/admin/sp2hp/excel', [SP2HPController::class, 'excel']);

	Route::post('/search', [SearchController::class, 'search']);
});

// Route aktivasi akun
Route::get('/users/activation/{id}', [DaftarController::class, 'activation']);
