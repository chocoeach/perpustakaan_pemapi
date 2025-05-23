<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\RakbukuController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// ---------------- Home ----------------
Route::get('/', function () {
    return view('welcome');
});

// ---------------- Book ----------------
Route::get('/book', [BookController::class, 'index'])->name('book.index'); // ✅ default setelah login
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::delete('/book/{id}/delete', [BookController::class, 'destroy'])->name('book.destroy');
Route::put('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');

// ---------------- Peminjam ----------------
Route::get('/peminjam', [PeminjamController::class, 'index'])->name('peminjam.index');
Route::post('/peminjam/store', [PeminjamController::class, 'store'])->name('peminjam.store');
Route::get('/peminjam/{id}/edit', [PeminjamController::class, 'edit'])->name('peminjam.edit');
Route::delete('/peminjam/{id}/delete', [PeminjamController::class, 'destroy'])->name('peminjam.destroy');
Route::put('/peminjam/update/{id}', [PeminjamController::class, 'update'])->name('peminjam.update');
Route::get('/peminjam/create', [PeminjamController::class, 'create'])->name('peminjam.create');

// ---------------- Pegawai ----------------
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::delete('/pegawai/{id}/delete', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');

// ---------------- Rak Buku ----------------
Route::get('/rakbuku', [RakbukuController::class, 'index'])->name('rakbuku.index');
Route::post('/rakbuku/store', [RakbukuController::class, 'store'])->name('rakbuku.store');
Route::get('/rakbuku/{id}/edit', [RakbukuController::class, 'edit'])->name('rakbuku.edit');
Route::delete('/rakbuku/{id}/delete', [RakbukuController::class, 'destroy'])->name('rakbuku.destroy');
Route::put('/rakbuku/update/{id}', [RakbukuController::class, 'update'])->name('rakbuku.update');
Route::get('/rakbuku/create', [RakbukuController::class, 'create'])->name('rakbuku.create');

// ---------------- Auth / Login ----------------
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
