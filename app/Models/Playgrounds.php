<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playgrounds extends Model
{
    use HasFactory;

    protected $table = 'playgrounds';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'repository_url',
        'user_id',
        // 'created_at',
        // 'updated_at',
        // 'deleted_at',
    ];
}
