<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangMasukController extends Controller
{
    public function index()
    {
        return view('barang_masuk.index', [
            "title" => "Stok Barang Masuk",
            'totalBarangMasuk' => BarangMasuk::count(),
        ]);
    }
}
