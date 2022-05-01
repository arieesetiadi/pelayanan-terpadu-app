<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelaporController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

// Route Login
Route::view('/login', 'login');
Route::post('/login', [LoginController::class, 'login']);

// Route Daftar
Route::view('/daftar', 'daftar');
Route::post('/daftar', [DaftarController::class, 'daftar']);

// Route Logout
Route::get('/logout', [LoginController::class, 'logout']);

// Route Pelapor
Route::get('/pelapor', [PelaporController::class, 'index']);
