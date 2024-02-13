<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisBarang extends Model
{
    use HasFactory;

    protected $table = 'jenis_barang';
    protected $guarded = ['id'];

    public function barang(): HasMany
    {
        return $this->HasMany('barang', 'id_jenis', 'id');
    }
}
