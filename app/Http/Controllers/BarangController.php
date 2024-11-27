<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index', [
            "title" => "Stok Barang",
            'totalBarang' => Barang::count(),
        ]);
    }
}
