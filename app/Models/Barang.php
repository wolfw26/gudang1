<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Barang Model
 * @property string $kode_barang
 * @property string $nama_barang
 * @property string $merk
 * @property App\Model\JenisBarang $jenisBarang
 * @property App\Model\Supplier $supllier
 */

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $guarded = ['id'];


    public function jenisBarang(): BelongsTo
    {
        return $this->belongsTo(JenisBarang::class, 'id_jenis', 'id');
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }

    public function barangMasuk(): HasMany
    {
        return $this->hasMany(BarangMasuk::class, 'id_barang', 'id');
    }

    public function barangKeluar(): HasMany
    {
        return $this->hasMany(BarangKeluar::class, 'id_barang', 'id');
    }
}
