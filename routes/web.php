<?php

use App\Http\Controllers\KirimNotifikasiController;
use App\Http\Controllers\ProgressController;
use Illuminate\Support\Facades\Route;

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
