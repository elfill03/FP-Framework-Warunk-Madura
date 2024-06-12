<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'nama_barang' => 'Minyak Goreng',
                'jumlah_barang' => '3',
                'harga_barang' => '15000',
                'satuan_id' => 1,
                'barang_masuk_id' => 1,
                // 'barang_keluar_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Telur Ayam',
                'jumlah_barang' => '5',
                'harga_barang' => '12500',
                'satuan_id' => 2,
                'barang_masuk_id' => 2,
                // 'barang_keluar_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Garam',
                'jumlah_barang' => '10',
                'harga_barang' => '5000',
                'satuan_id' => 3,
                'barang_masuk_id' => 3,
                // 'barang_keluar_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Gula',
                'jumlah_barang' => '12',
                'harga_barang' => '12000',
                'satuan_id' => 2,
                'barang_masuk_id' => 4,
                // 'barang_keluar_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Air mineral',
                'jumlah_barang' => '15',
                'harga_barang' => '3000',
                'satuan_id' => 4,
                'barang_masuk_id' => 5,
                // 'barang_keluar_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Kecap sachet',
                'jumlah_barang' => '3',
                'harga_barang' => '30000',
                'satuan_id' => 5,
                'barang_masuk_id' => 6,
                // 'barang_keluar_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
