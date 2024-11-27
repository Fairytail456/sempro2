<?php

namespace Database\Seeders;

use App\Models\BarangKeluar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BarangKeluar::create([
            "barang_id" => '1',
            "stok" => '2',
            // "tanggal_keluar" => '',
        ]);

        BarangKeluar::create([
            "barang_id" => '2',
            "stok" => '1',
            // "tanggal_keluar" => '',
        ]);
    }
}
