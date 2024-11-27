<?php

namespace Database\Seeders;

use App\Models\BarangMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarangMasuk::create([
            "barang_id" => '1',
            "stok" => '3',
            // "tanggal_masuk" => '',
        ]);

        BarangMasuk::create([
            "barang_id" => '2',
            "stok" => '5',
            // "tanggal_masuk" => '',
        ]);
    }
}
