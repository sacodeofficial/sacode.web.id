<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodingCourses extends Model
{
    use HasFactory;

    protected $table = 'coding_courses';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'thumbnail',
    ];
}
