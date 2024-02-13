<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';
    protected $guarded = ['id'];


    public function staffJabatan(): HasMany
    {
        return $this->hasMany(StaffGudang::class, 'jabatan_id', 'id');
    }
}
