<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('barang.dashboard');
})->name('dashboard');

Route::get('/barang-masuk', function () {
    return view('barang.barang-masuk');
})->name('barangmasuk');

Route::get('/laporan-pemasukan', function () {
    return view('barang.laporan-pemasukan');
})->name('laporanpemasukan');
