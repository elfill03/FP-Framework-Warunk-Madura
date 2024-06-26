<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang_masuk')->insert([
            [
                'nama_barang' => 'Minyak Goreng',
                'tanggal' => now(),
                'jumlah_barang' => '3',
                'harga_barang' => '45000',
                'user_id' => 2,
                'satuan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Telur Ayam',
                'tanggal' => now(),
                'jumlah_barang' => '5',
                'harga_barang' => '60000',
                'user_id' => 2,
                'satuan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Garam',
                'tanggal' => now(),
                'jumlah_barang' => '1',
                'harga_barang' => '5000',
                'user_id' => 2,
                'satuan_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Gula',
                'tanggal' => now(),
                'jumlah_barang' => '4',
                'harga_barang' => '50000',
                'user_id' => 2,
                'satuan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Air mineral',
                'tanggal' => now(),
                'jumlah_barang' => '2',
                'harga_barang' => '6000',
                'user_id' => 2,
                'satuan_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Kecap sachet',
                'tanggal' => now(),
                'jumlah_barang' => '1',
                'harga_barang' => '30000',
                'user_id' => 2,
                'satuan_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
