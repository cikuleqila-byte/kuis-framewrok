<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InformasiController;

Route::get('/', function () {
    return redirect('daftar-kategori');
});

Route::get('/kategori', [KategoriController::class, 'tampil']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori/simpan', [KategoriController::class, 'simpan']);
Route::get('/kategori/{kategori}/ubah', [KategoriController::class, 'ubah']);
Route::put('/kategori/update', [KategoriController::class, 'update']);
Route::delete('/kategori/{kategori}', [KategoriController::class, 'hapus']);
Route::get('/daftar-informasi', [InformasiController::class, 'tampil']);
Route::get('/informasi/create', [InformasiController::class, 'create']);
Route::post('/informasi/simpan', [InformasiController::class, 'simpan']);
Route::get('/informasi/{informasi}/ubah', [InformasiController::class, 'ubah']);
Route::put('/informasi/update', [InformasiController::class, 'update']);
Route::delete('/informasi/{informasi}', [InformasiController::class, 'hapus']);