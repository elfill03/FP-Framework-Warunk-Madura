<?php

namespace App\Http\Controllers;
use App\Models\BarangKeluar;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class LaporanKeluarKasirController extends Controller
{
    public function index()
    {
        $barangKeluars = BarangKeluar::all();

        return view('kasir.laporan-pengeluaran', [ 'barangKeluars' => $barangKeluars]);
    }

    public function exportPDF()
    {
        $barangKeluars = BarangKeluar::all();

        $pdf = PDF::loadView('kasir.export_keluar_Kasir_pdf', compact('barangKeluars'));
        return $pdf->download('laporan-pengeluaran-kasir.pdf');
    }
}