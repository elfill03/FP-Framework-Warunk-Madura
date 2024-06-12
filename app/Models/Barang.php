<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'harga_barang',
        'satuan_id'
    ];

    public function satuan()
    {
        return $this->belongsTo(SatuanBarang::class, 'satuan_id');
    }

    public function barangMasuk()
    {
        return $this->belongsTo(BarangMasuk::class, 'barang_masuk_id');
    }

    public function barangKeluars()
    {
        return $this->hasMany(BarangKeluar::class);
    }
}
