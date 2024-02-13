<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Detail_barang_masuk extends Model
{
    use HasFactory;
    protected $table = 'detail_barang_masuk';
    protected $guarded = ['id'];



    public function namaBarang(): BelongsTo
    {
        return $this->BelongsTo(Barang::class, 'barang_id', 'id');
    }

    public function barangMasuk(): BelongsTo
    {
        return $this->belongsTo(BarangMasuk::class, 'barang_masuk_id', 'id');
    }
}
