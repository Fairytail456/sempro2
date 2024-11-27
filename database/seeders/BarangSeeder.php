<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            "nama_barang" => 'Extra Joss',
            "kode_barang" => '132',
            "stok" => '5'
        ]);

        Barang::create([
            "nama_barang" => 'Kuku Bima',
            "kode_barang" => '123',
            "stok" => '7'
        ]);
    }
}
