<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    use HasFactory;

    protected $table = 'merchandises';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'thumbnail',
        'harga',
        'stok',
        'status',
        'size',
        'color',
    ];


}
