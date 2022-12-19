<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProgressController, SertifikatIUPController, KirimNotifikasiController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kirim-notif', [KirimNotifikasiController::class, 'index']);
Route::controller(ProgressController::class)->name('progress.')->group(function () {
    Route::get('/progress', 'index')->name('index');
    Route::get('/progress/tambah', 'tambah')->name('tambah');
    Route::post('/progress/simpan', 'simpan')->name('simpan');
    Route::get('/progress/{progress}/edit', 'edit')->name('edit');
    Route::patch('/progress/{progress}/update', 'update')->name('update');
    Route::delete('/progress/{progress}/hapus')->name('hapus');
});

Route::controller(SertifikatIUPController::class)->name('sertifikat.')->group(function () {
    Route::get('/sertifikat', 'index')->name('index');
    Route::get('/sertifikat/tambah', 'tambah')->name('tambah');
    Route::post('/sertifikat/simpan', 'simpan')->name('simpan');
    Route::get('/sertifikat/{sertifikat}/edit', 'edit')->name('edit');
    Route::patch('/sertifikat/{sertifikat}/update', 'update')->name('update');
    Route::delete('/sertifikat/{sertifikat}/hapus', 'hapus')->name('hapus');
});
