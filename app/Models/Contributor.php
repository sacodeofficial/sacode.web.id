<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    protected $table = 'table_contributors';

    protected $fillable = [
        'nama', 'job_desc', 'sosial_media', 'photo',
    ];
}
