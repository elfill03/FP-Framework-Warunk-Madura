<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


// Route::get('/', function () {
//     return view('welcome');
// });



// SUPER ADMIN

Route::get('/super/superadmin-dashboard', function () {
    return view('superAdmin.sup-admin-dashboard');
})->name('dashboard');

Route::get('/super/data-toko', function () {
    return view('superAdmin.data-toko');
})->name('datatoko');



// ADMIN

Route::get('/admin/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->name('dashboard');

Route::get('/admin/barang-masuk', function () {
    return view('admin.barang-masuk');
})->name('barangmasuk');

Route::get('/admin/laporan-pemasukan', function () {
    return view('admin.laporan-pemasukan');
})->name('laporanpemasukan');

Route::get('/admin/laporan-pengeluaran', function () {
    return view('admin.laporan-pengeluaran');
})->name('laporanpengeluaran');



// KASIR

Route::get('/kasir/kasir-dashboard', function () {
    return view('kasir.kasir-dashboard');
})->name('kasirdashboard');

Route::get('/kasir/barang-keluar', function () {
    return view('kasir.barang-keluar');
})->name('barangkeluar');

Route::get('/kasir/laporan-pengeluaran', function () {
    return view('kasir.laporan-pengeluaran');
})->name('laporanpengeluaran');



// AUTHENTICATION

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/daftar', function () {
    return view('auth.daftar');
})->name('daftar');




