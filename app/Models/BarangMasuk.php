<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    // Explicitly define the table name
    protected $table = 'barang_masuk';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function satuan()
    {
        return $this->belongsTo(SatuanBarang::class, 'satuan_id');
    }
}
