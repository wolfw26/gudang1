<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluar';
    protected $guarded = ['id'];

    public function barang(): HasOne
    {
        return $this->hasOne(Barang::class, 'id_barang');
    }
}
