<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuk';
    protected $guarded = ['id'];


    public function barang(): HasOne
    {
        return $this->hasOne(Barang::class, 'id_barang');
    }

    public function detail_barang_masuk(): HasMany
    {
        return $this->hasMany(Detail_barang_masuk::class, 'barang_masuk_id');
    }
}
