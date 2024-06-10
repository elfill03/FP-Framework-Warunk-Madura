<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'El',
                'email' => 'Fill',
                'password' => bcrypt('superadmin'),
                'tanggal_Lahir' => '1945-08-17',
                'jenis_kelamin' => 'L',
                'alamat' => 'Surabaya, Indonesia',
                'no_telp' => '081232803452',
                'foto_profile' => 'null',
                'role' => 'super_admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'hugo',
                'email' => 'super@super',
                'password' => bcrypt('superadmin'),
                'tanggal_Lahir' => '1945-08-17',
                'jenis_kelamin' => 'L',
                'alamat' => 'Surabaya, Indonesia',
                'no_telp' => '081232803452',
                'foto_profile' => 'null',
                'role' => 'super_admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'rayhan',
                'email' => 'admin@admin',
                'password' => bcrypt('adminadmin'),
                'tanggal_Lahir' => '1945-08-17',
                'jenis_kelamin' => 'L',
                'alamat' => 'Surabaya, Indonesia',
                'no_telp' => '081232803452',
                'foto_profile' => 'null',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'rayhan',
                'email' => 'kasir@kasir',
                'password' => bcrypt('kasirkasir'),
                'tanggal_Lahir' => '1945-08-17',
                'jenis_kelamin' => 'L',
                'alamat' => 'Surabaya, Indonesia',
                'no_telp' => '081232803452',
                'foto_profile' => 'null',
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
