<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'namalengkap',
        'alamat1',
        'alamat2',
        'alamat3',
        'notelp',
        'username',
        'password',
        'foto'
    ];
}
