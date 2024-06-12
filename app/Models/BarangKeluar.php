<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluar';

    protected $fillable = [
        'tanggal',
        'barang_id',
        'user_id',
        'jumlah_barang',
        'satuan_barang',
        'harga_barang',
        'total_harga'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function satuan()
    {
        return $this->belongsTo(SatuanBarang::class, 'satuan_id');
    }
}
