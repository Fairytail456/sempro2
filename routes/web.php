<?php

use Illuminate\Support\Facades\Route;

Route::prefix('')->group(function () {
    Route::controller(\App\Http\Controllers\HalamanController::class)->name('halaman.')->group(function () {
        Route::get('/index', 'dashboard');
    });
});

Route::prefix('')->group(function () {
    Route::controller(\App\Http\Controllers\BarangMasukController::class)->name('barang_masuk.')->group(function () {
        Route::get('/index-masuk', 'index');
    });
});

Route::prefix('')->group(function () {
    Route::controller(\App\Http\Controllers\BarangKeluarController::class)->name('barang_keluar.')->group(function () {
        Route::get('/index-keluar', 'index');
    });
});

Route::prefix('')->group(function () {
    Route::controller(\App\Http\Controllers\BarangController::class)->name('barang.')->group(function () {
        Route::get('/index-barang', 'index');
    });
});
