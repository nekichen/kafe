<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'menu',
        'idjenis',
        'harga',
        'stok',
        'foto1',
        'foto2',
        'foto3',
        'deskripsi'
    ];
}
