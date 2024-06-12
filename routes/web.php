<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataKasirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangMasukController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/login');
});


// Super admin
Route::middleware(['auth'])->group(function () {
    Route::get('/super/superadmin-dashboard', function () {
        if (Auth::user()->role != 'super_admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('superAdmin.sup-admin-dashboard');
    })->name('dashboard');

    Route::get('/super/data-toko', function () {
        if (Auth::user()->role != 'super_admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('superAdmin.data-toko');
    })->name('datatoko');

    Route::get('/super/data-admin', function () {
        if (Auth::user()->role != 'super_admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('superAdmin.data-admin');
    })->name('dataadmin');

    Route::get('/super/add-admin', function () {
        if (Auth::user()->role != 'super_admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('superAdmin.add-admin');
    })->name('adddataadmin');

    Route::get('/super/add-toko', function () {
        if (Auth::user()->role != 'super_admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('superAdmin.add-toko');
    })->name('adddatatoko');

    Route::get('/super/edit-toko', function () {
        if (Auth::user()->role != 'super_admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('superAdmin.edit-toko');
    })->name('updatedatatoko');

    Route::get('/super/edit-admin', function () {
        if (Auth::user()->role != 'super_admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('superAdmin.edit-admin');
    })->name('updatedataadmin');
});

// ADMIN
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/admin-dashboard', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.admin-dashboard');
    })->name('admindashboard');

    Route::get('/admin/barang-masuk', [BarangMasukController::class, 'index'])->name('barang.index');
    Route::get('/admin/add-barang-masuk', [BarangMasukController::class, 'create'])->name('barang.create');
    Route::post('/admin/store-barang-masuk', [BarangMasukController::class, 'store'])->name('barang.store');
    Route::delete('/admin/barang-masuk/{id}', [BarangMasukController::class, 'destroy'])->name('barang.destroy');
    Route::get('/admin/edit-barang-masuk/{id}', [BarangMasukController::class, 'edit'])->name('barang.edit');
    Route::put('/admin/barang-masuk/{id}', [BarangMasukController::class, 'update'])->name('barang.update');


    Route::get('/admin/laporan-pemasukan', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.laporan-pemasukan');
    })->name('laporanpemasukan');

    Route::get('/admin/laporan-pengeluaran', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.laporan-pengeluaran');
    })->name('laporanpengeluaran');

    Route::get('/admin/data-kasir', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.data-kasir');
    })->name('dataKasir');

    Route::get('/admin/add-kasir', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.add-kasir');
    })->name('addKasir');

});

// KASIR
Route::middleware(['auth'])->group(function () {
    Route::get('/kasir/kasir-dashboard', function () {
        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }
        return view('kasir.kasir-dashboard');
    })->name('kasirdashboard');

    Route::get('/kasir/stock-barang', [BarangController::class, 'index'])->name('stockbarang.index');
    Route::get('/getSatuan/{id}', [BarangController::class, 'getSatuanById']);

    Route::get('/kasir/barang-keluar', [BarangKeluarController::class, 'index'])->name('barangKeluar.index');
    Route::get('/kasir/add-barang-keluar', [BarangKeluarController::class, 'create'])->name('barangKeluar.create');
    Route::post('/kasir/store-barang-keluar', [BarangKeluarController::class, 'store'])->name('barangKeluar.store');


    Route::get('/kasir/laporan-pengeluaran', function () {
        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }
        return view('kasir.laporan-pengeluaran');
    })->name('laporanpengeluarankasir');

});

// AUTHENTICATION
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);

Route::get('/daftar', function () {
    return view('auth.daftar');
})->name('daftar');


// PROFILE
Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Admin Controller
Route::resource('adminController', DataAdminController::class);
Route::get('/dataAdmin/getAdmin', [DataAdminController::class, 'getAdmin'])->name('dataAdmin.getAdmin');

// Data Kasir Controller
Route::resource('kasirController', DataKasirController::class);
Route::get('/dataKasir/getKasir', [DataKasirController::class, 'getKasir'])->name('dataKasir.getKasir');
