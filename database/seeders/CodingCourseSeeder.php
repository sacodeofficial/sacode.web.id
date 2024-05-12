<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CodingCourses;

class CodingCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'title' => 'Belajar Laravel 8',
                'slug' => 'belajar-laravel-8',
                'description' => 'Belajar Laravel 8 dari dasar hingga mahir',
                'thumbnail' => 'laravel.jpg',
            ],
            [
                'title' => 'Belajar Vue 3',
                'slug' => 'belajar-vue-3',
                'description' => 'Belajar Vue 3 dari dasar hingga mahir',
                'thumbnail' => 'vue.jpg',
            ],
            [
                'title' => 'Belajar React JS',
                'slug' => 'belajar-react-js',
                'description' => 'Belajar React JS dari dasar hingga mahir',
                'thumbnail' => 'react.jpg',
            ],
        ])->each(function ($collection) {
            CodingCourses::create($collection);
        });
    }
}
