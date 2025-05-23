<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\RakbukuController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::apiResource('buku', BookController::class);
Route::apiResource('pegawai', PegawaiController::class);
Route::apiResource('peminjam', PeminjamController::class);
Route::apiResource('rakbuku', RakbukuController::class);