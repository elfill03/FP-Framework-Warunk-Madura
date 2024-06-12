<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\SatuanBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangKeluars = BarangKeluar::with(['barang', 'user', 'satuan'])->get();

        if (Auth::user()->role != 'kasir') {
            abort(403, 'Unauthorized action.');
        }

        return view('kasir.barang-keluar', ['barangKeluars' => $barangKeluars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $satuanList = SatuanBarang::all();
        $barangs = Barang::all();

        return view('kasir.add-barang-keluar', compact( 'satuanList', 'barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'barang_id' => 'required|exists:barang,id',
            'jumlah_barang' => 'required|integer|min:1',
        ]);

        $barang = Barang::findOrFail($request->barang_id);

        if ($request->jumlah_barang > $barang->jumlah_barang) {
            return back()->withErrors(['Jumlah barang melebihi stok yang tersedia.']);
        }

        DB::transaction(function () use ($request, $barang) {
            BarangKeluar::create([
                'tanggal' => $request->tanggal,
                'barang_id' => $request->barang_id,
                'jumlah_barang' => $request->jumlah_barang,
                'harga_barang' => $barang->harga_barang,
                'total_harga' => $request->jumlah_barang * $barang->harga_barang,
                'user_id' => $request->user_id,
            ]);

            $barang->decrement('jumlah_barang', $request->jumlah_barang);
        });

        return redirect()->route('barangKeluar.index')->with('success', 'Data barang keluar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
