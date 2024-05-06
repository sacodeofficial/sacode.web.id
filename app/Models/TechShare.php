<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechShare extends Model
{
    use HasFactory;

    protected $table = 'tech_shares';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'moderator',
        'speaker',
        'job',
        'tanggal',
        'waktu',
        'thumbnail',
        'akun_github',
        'akun_linkedin',
        'akun_instagram',
    ];
}
