<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CodingCourses;

class CodingCourseSeeder extends Seeder
{

    public function run(): void
    {
        collect([
            [
                'id' => 4,
                'title' => 'Belajar Laravel Batch II 2024',
                'slug' => 'belajar-laravel-batch-ii-2024',
                'description' => 'Kelas Coding Junior Developer "Belajar Laravel 11"',
                'thumbnail' => 'belajar-laravel-batch-ii-2024.jpeg',
                'wa_link' => 'https://wa.link/uaffdm',
                'is_on_site' => 'Hybrid',
                'is_open' => true,
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],

            [
                'id' => 3,
                'title' => 'Belajar HTML & CSS Batch II 2024',
                'slug' => 'belajar-html-css-batch-ii-2024',
                'description' => 'Belajar Laravel 8 dari dasar hingga mahir',
                'thumbnail' => 'belajar-html-css-batch-ii-2024.jpeg',
                'wa_link' => 'https://wa.link/uaffdm',
                'is_on_site' => 'Online',
                'is_open' => false,
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),

            ],
            [
                'id' => 2,
                'title' => 'Belajar JavaScript Batch I 2024',
                'slug' => 'belajar-javascript-batch-i-2024',
                'description' => 'Belajar Vue 3 dari dasar hingga mahir',
                'thumbnail' => 'belajar-javascript-batch-i-2024.jpeg',
                'wa_link' => 'https://wa.link/uaffdm',
                'is_on_site' => 'On Site',
                'is_open' => false,
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'id' => 1,
                'title' => 'Belajar Laravel Batch I 2024',
                'slug' => 'belajar-laravel-batch-i-2024',
                'description' => 'Belajar React JS dari dasar hingga mahir',
                'thumbnail' => 'belajar-laravel-batch-i-2024.jpeg',
                'wa_link' => 'https://wa.link/uaffdm',
                'is_on_site' => 'On Site',
                'is_open' => false,
                'user_id' => fake()->numberBetween(1, 5),
                'deleted_at' => now(),
            ],

        ])->each(function ($collection) {
            CodingCourses::create($collection);
        });
    }
}
