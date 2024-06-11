<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan_barang')->insert([
            [
                'nama_satuan' => 'Liter',
                'kode_satuan' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_satuan' => 'Kilo',
                'kode_satuan' => 'KG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_satuan' => 'Gram',
                'kode_satuan' => 'Gr',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_satuan' => 'Pack',
                'kode_satuan' => 'PCS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_satuan' => 'Dus',
                'kode_satuan' => 'DUS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
