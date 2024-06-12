<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanBarang extends Model
{
    use HasFactory;

    protected $table = 'satuan_barang';

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'satuan_id');
    }

    public function stockBarang()
    {
        return $this->hasMany(Barang::class, 'satuan_id');
    }

    public function barangKeluars()
    {
        return $this->hasMany(BarangKeluar::class);
    }
}
