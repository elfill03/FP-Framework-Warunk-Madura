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

Route::get('/super/add-toko', function () {
    return view('superAdmin.add-toko');
})->name('adddatatoko');

Route::get('/super/edit-toko', function () {
    return view('superAdmin.edit-toko');
})->name('updatedatatoko');



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

Route::get('/admin/add-barang-masuk', function () {
    return view('admin.add-barang-masuk');
})->name('addbarangmasuk');

Route::get('/admin/edit-barang-masuk', function () {
    return view('admin.edit-barang-masuk');
})->name('updatebarangmasuk');



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

Route::get('/kasir/add-barang-keluar', function () {
    return view('kasir.add-barang-keluar');
})->name('addbarangkeluar');

Route::get('/kasir/edit-barang-keluar', function () {
    return view('kasir.edit-barang-keluar');
})->name('updatebarangkeluar');



// AUTHENTICATION

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/daftar', function () {
    return view('auth.daftar');
})->name('daftar');





Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');
