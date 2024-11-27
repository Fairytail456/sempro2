<?php

namespace App\Models;

use App\Models\BarangMasuk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'stok'
    ];
    public function masuk(): HasOne
    {
        return $this->hasOne(BarangMasuk::class, 'barang_id');
    }
}
