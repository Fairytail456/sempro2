<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        return view('barang_keluar.index', [
            "title" => "Stok Barang Keluar",
            'totalBarangKeluar' => BarangKeluar::count(),
        ]);
    }
}
