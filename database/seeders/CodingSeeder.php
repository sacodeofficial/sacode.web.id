<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CodingCourses;

class CodingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'judul' => 'Belajar Laravel 8',
                'slug' => 'belajar-laravel-8',
                'deskripsi' => 'Belajar Laravel 8 dari dasar hingga mahir',
                'thumbnail' => 'laravel.jpg',
            ],
            [
                'judul' => 'Belajar Vue 3',
                'slug' => 'belajar-vue-3',
                'deskripsi' => 'Belajar Vue 3 dari dasar hingga mahir',
                'thumbnail' => 'vue.jpg',
            ],
            [
                'judul' => 'Belajar React JS',
                'slug' => 'belajar-react-js',
                'deskripsi' => 'Belajar React JS dari dasar hingga mahir',
                'thumbnail' => 'react.jpg',
            ],
        ])->each(function ($codingData) {
            CodingCourses::create($codingData);
        });
    }
}
