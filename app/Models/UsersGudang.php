<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersGudang extends Model
{
    use HasFactory;

    protected $table = 'users_gudang';
    protected $guarded = ['id'];
}
