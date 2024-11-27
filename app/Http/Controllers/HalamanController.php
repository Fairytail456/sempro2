<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index', [
            "title" => "Dashboard",
            'totalBarang' => Barang::count(),
            'totalBarangMasuk' => BarangMasuk::count(),
            'totalBarangKeluar' => BarangKeluar::count(),
        ]);
    }
}
