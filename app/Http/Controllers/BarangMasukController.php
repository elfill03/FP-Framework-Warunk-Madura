<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\SatuanBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = BarangMasuk::with(['user', 'satuan'])->get();

        if (Auth::user()->role != 'admin') {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.barang-masuk', [ 'barangs' => $barangs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $satuanList = SatuanBarang::all();

        return view('admin.add-barang-masuk', compact('satuanList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_barang' => 'required|string|max:50',
            'jumlah_barang' => 'required|integer',
            'harga_barang' => 'required|integer',
            'satuan_id' => 'required|exists:satuan_barang,id',
        ]);

        // Perhitungan harga per unit
        $unitPrice = $request->harga_barang / $request->jumlah_barang;

        $barang = new BarangMasuk();
        $barang->tanggal = $request->tanggal;
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->user_id = Auth::user()->id;
        $barang->satuan_id = $request->satuan_id;

        $barang->save();

        // Update stock
        $barangMasuk = Barang::where('nama_barang', $request->nama_barang)->first();
        if ($barangMasuk) {
            $barangMasuk->jumlah_barang += $request->jumlah_barang;

            // Jika terdapat perubahan harga
            $barangMasuk->harga_barang = $unitPrice;

            $barangMasuk->save();
        } else {
            $newBarang = new Barang();
            $newBarang->nama_barang = $request->nama_barang;
            $newBarang->jumlah_barang = $request->jumlah_barang;
            $newBarang->harga_barang = $unitPrice;
            $newBarang->satuan_id = $request->satuan_id;
            $newBarang->save();
        }

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $pageTitle = 'Detail Barang';

        $barang = BarangMasuk::find($id);

        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = BarangMasuk::findOrFail($id);
        $satuanList = SatuanBarang::all();
        return view('admin.edit-barang-masuk', compact('barang', 'satuanList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama_barang' => 'required|string|max:50',
            'jumlah_barang' => 'required|integer',
            'harga_barang' => 'required|integer',
            'satuan_id' => 'required|exists:satuan_barang,id',
        ]);

        $barang = BarangMasuk::findOrFail($id);
        $barang->tanggal = $request->tanggal;
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->satuan_id = $request->satuan_id;

        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Barang updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = BarangMasuk::findOrFail($id);

        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang deleted successfully.');
    }
}
