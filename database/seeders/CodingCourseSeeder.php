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
                'id' => 9,
                'title' => 'Belajar Coding Dasar: JavaScript',
                'slug' => 'belajar-coding-dasar-javascript',
                'description' => 'Bagi kam yang mau belajar dasar-dasar coding mulai dari awal, kelas ini cocok untuk pemula atau yang mau mendalami teknik penulisan coding JavaScript.',
                'thumbnail' => '2025/sacode-course-poster-04.png',
                'wa_link' => 'https://wa.link/3esstr',
                'is_on_site' => 'On Site',
                'is_open' => true,
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'id' => 8,
                'title' => 'Belajar Coding Dasar: HTML & CSS',
                'slug' => 'belajar-coding-dasar-html-css',
                'description' => 'Bagi kam yang mau belajar dasar-dasar coding mulai dari awal, kelas ini cocok untuk pemula atau yang mau mendalami teknik penulisan coding HTML & CSS.',
                'thumbnail' => '2025/sacode-course-poster-03.png',
                'wa_link' => 'https://wa.link/3esstr',
                'is_on_site' => 'Online',
                'is_open' => true,
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Kelas Coding Dasar: Bootstrap',
                'slug' => 'kelas-coding-dasar-bootstrap',
                'description' => 'Kursus ini cocok untuk pemula yang ingin tau cara menulis coding dan menggunakan Framework CSS Bootstrap.',
                'thumbnail' => '2025/sacode-course-poster-02.png',
                'wa_link' => 'https://wa.link/3esstr',
                'is_on_site' => 'On Site',
                'is_open' => false,
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Kelas Coding Dasar: HTML & CSS',
                'slug' => 'kelas-coding-dasar-html-css',
                'description' => 'Bagi kam yang mau belajar dasar-dasar coding mulai dari awal, kelas ini cocok untuk pemula atau yang mau mendalami teknik penulisan coding HTML & CSS.',
                'thumbnail' => '2025/sacode-course-poster-01.png',
                'wa_link' => 'https://wa.link/3esstr',
                'is_on_site' => 'On Site',
                'is_open' => false,
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],

            // [
            //     'id' => 5,
            //     'title' => 'Kelas Belajar Perancangan Sistem Informasi',
            //     'slug' => 'belajar-laravel-batch-ii-2024',
            //     'description' => 'Mau jago bikin sistem informasi? Pelajari perencanaan proyek, desain user flow, hingga pembuatan prototype di kelas ini! ',
            //     'thumbnail' => 'belajar-analisa-perancangan-sistem-informasi-1.png',
            //     'wa_link' => 'https://chat.whatsapp.com/EcOG9DROVOfDtgAXmWU4jm',
            //     'is_on_site' => 'On Site',
            //     'is_open' => false,
            //     'user_id' => fake()->numberBetween(1, 5),
            //     'published_at' => now(),
            // ],
            // [
            //     'id' => 4,
            //     'title' => 'Belajar Laravel Batch II 2024',
            //     'slug' => 'belajar-laravel-batch-ii-2024',
            //     'description' => 'Kelas Coding Junior Developer "Belajar Laravel 11"',
            //     'thumbnail' => 'belajar-laravel-batch-ii-2024.jpeg',
            //     'wa_link' => 'https://wa.link/uaffdm',
            //     'is_on_site' => 'Hybrid',
            //     'is_open' => false,
            //     'user_id' => fake()->numberBetween(1, 5),
            //     'published_at' => now(),
            // ],

            // [
            //     'id' => 3,
            //     'title' => 'Belajar HTML & CSS Batch II 2024',
            //     'slug' => 'belajar-html-css-batch-ii-2024',
            //     'description' => 'Belajar Laravel 8 dari dasar hingga mahir',
            //     'thumbnail' => 'belajar-html-css-batch-ii-2024.jpeg',
            //     'wa_link' => 'https://wa.link/uaffdm',
            //     'is_on_site' => 'Online',
            //     'is_open' => false,
            //     'user_id' => fake()->numberBetween(1, 5),
            //     'published_at' => now(),

            // ],
            // [
            //     'id' => 2,
            //     'title' => 'Belajar JavaScript Batch I 2024',
            //     'slug' => 'belajar-javascript-batch-i-2024',
            //     'description' => 'Belajar Vue 3 dari dasar hingga mahir',
            //     'thumbnail' => 'belajar-javascript-batch-i-2024.jpeg',
            //     'wa_link' => 'https://wa.link/uaffdm',
            //     'is_on_site' => 'On Site',
            //     'is_open' => false,
            //     'user_id' => fake()->numberBetween(1, 5),
            //     'published_at' => now(),
            // ],
            // [
            //     'id' => 1,
            //     'title' => 'Belajar Laravel Batch I 2024',
            //     'slug' => 'belajar-laravel-batch-i-2024',
            //     'description' => 'Belajar React JS dari dasar hingga mahir',
            //     'thumbnail' => 'belajar-laravel-batch-i-2024.jpeg',
            //     'wa_link' => 'https://wa.link/uaffdm',
            //     'is_on_site' => 'On Site',
            //     'is_open' => false,
            //     'user_id' => fake()->numberBetween(1, 5),
            //     'deleted_at' => now(),
            // ],

        ])->each(function ($collection) {
            CodingCourses::create($collection);
        });
    }
}
