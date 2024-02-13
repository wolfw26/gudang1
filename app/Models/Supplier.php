<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'supplier';
    protected $guarded = ['id'];

    public function barang(): HasMany
    {
        return $this->HasMany('barang', 'id_supplier', 'id');
    }
}
