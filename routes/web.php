<?php

use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\DataKasirController;
use App\Http\Controllers\TokoController;
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


// PROFILE
Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data Admin Controller
Route::resource('superAdminController', DataAdminController::class);
Route::get('/dataAdmin/getAdmin', [DataAdminController::class, 'getAdmin'])->name('dataAdmin.getAdmin');
Route::get('/superAdmin/{id}/edit', [DataAdminController::class, 'edit'])->name('dataAdmin.edit');


// Data Kasir Controller
Route::resource('kasirController', DataKasirController::class, );
Route::get('/dataKasir/getKasir', [DataKasirController::class, 'getKasir'])->name('dataKasir.getKasir');
Route::get('/admin/{id}/edit', [DataKasirController::class, 'edit'])->name('dataKasir.edit');


// Toko Controller
Route::resource('TokoController', TokoController::class, );
