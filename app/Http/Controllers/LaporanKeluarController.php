<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LaporanKeluarController extends Controller
{
    public function index()
    {
        $barangKeluars = BarangKeluar::all();

        return view('admin.laporan-pengeluaran', [ 'barangKeluars' => $barangKeluars]);
    }

    public function exportPDF()
    {
        $barangKeluars = BarangKeluar::all();

        $pdf = PDF::loadView('admin.export_keluar_pdf', compact('barangKeluars'));
        return $pdf->download('laporan-pengeluaran.pdf');
    }
}