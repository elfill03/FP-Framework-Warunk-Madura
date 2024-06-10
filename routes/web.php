<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
});

// ADMIN
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/admin-dashboard', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.admin-dashboard');
    })->name('admindashboard');

    Route::get('/admin/barang-masuk', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.barang-masuk');
    })->name('barangmasuk');

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

    Route::get('/admin/add-barang-masuk', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.add-barang-masuk');
    })->name('addbarangmasuk');

    Route::get('/admin/edit-barang-masuk', function () {
        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.edit-barang-masuk');
    })->name('updatebarangmasuk');
});

// KASIR
Route::middleware(['auth'])->group(function () {
    Route::get('/kasir/kasir-dashboard', function () {
        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }
        return view('kasir.kasir-dashboard');
    })->name('kasirdashboard');

    Route::get('/kasir/barang-keluar', function () {
        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }
        return view('kasir.barang-keluar');
    })->name('barangkeluar');

    Route::get('/kasir/laporan-pengeluaran', function () {
        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }
        return view('kasir.laporan-pengeluaran');
    })->name('laporanpengeluarankasir');

    Route::get('/kasir/add-barang-keluar', function () {
        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }
        return view('kasir.add-barang-keluar');
    })->name('addbarangkeluar');

    Route::get('/kasir/edit-barang-keluar', function () {
        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }
        return view('kasir.edit-barang-keluar');
    })->name('updatebarangkeluar');
});

// AUTHENTICATION
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);

Route::get('/daftar', function () {
    return view('auth.daftar');
})->name('daftar');

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
