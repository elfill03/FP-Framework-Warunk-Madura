<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MasukExport;

class LaporanMasukController extends Controller
{
    public function index()
    {
        $barangs = BarangMasuk::all();

        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.laporan-pemasukan', ['barangs' => $barangs]);
    }

    public function exportPDF()
    {
        $barangs = BarangMasuk::all();

        $pdf = PDF::loadView('admin.export_masuk_pdf', compact('barangs'));
        return $pdf->download('laporan-pemasukan.pdf');
    }
    public function exportExcel()
    {
        return Excel::download(new MasukExport, 'Laporan Pemasukan.xlsx');
    }
}
