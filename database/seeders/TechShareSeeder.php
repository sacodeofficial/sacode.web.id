<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TechShare;

class TechShareSeeder extends Seeder
{

    public function run(): void
    {
        collect([
            [
                'title' => 'Penerapan dan Pengembangan IoT Pada Industri Game',
                'slug' => 'penerapan-dan-pengembangan-iot-pada-industri-game',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-06-12',
                'time' => '18:00',
                'poster' => 'techshare/9.jpg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Smart Farming: Monitoring Suhu dan Kelembaban Tanah Pada Tanaman Berbasis IOT',
                'slug' => 'smart-farming-monitoring-suhu-dan-kelembaban-tanah-pada-tanaman-berbasis-iot',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-05-22',
                'time' => '18:00',
                'poster' => 'techshare/8.jpeg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Rancang Bangun Basis Data Laravel Gunakan "Migration, Factories, Seeder"',
                'slug' => 'rancang-bangun-basis-data-laravel-gunakan-migration-factories-seeder',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-05-08',
                'time' => '18:00',
                'poster' => 'techshare/7.jpeg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Rapid Mobile Development Gunakan Ionic Framework & Angular',
                'slug' => 'rapid-mobile-development-gunakan-ioni-framework-angular',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-04-24',
                'time' => '18:00',
                'poster' => 'techshare/6.jpeg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Belajar & Mengenal Javascript DOM (Document Object Model)',
                'slug' => 'belajar-&-mengenal-javascript-dom-document-object-model',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-04-17',
                'time' => '18:00',
                'poster' => 'techshare/5.jpeg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Aplikasi Pendeteksi Teks Dan Dokumen Gunakan OCR Amazon Textract',
                'slug' => 'menggunakan-google-apps-script-pada-google-workspace-platform',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-03-27',
                'time' => '18:00',
                'poster' => 'techshare/4.jpeg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Penerapan Visualisasi Data Pada Google Looker Studio',
                'slug' => 'penerapan-visualisasi-data-pada-google-looker-studio',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-03-13',
                'time' => '18:00',
                'poster' => 'techshare/3.jpeg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Data Science Bagi Pemula Menggunakan Coding Python',
                'slug' => 'data-science-bagi-pemula-menggunakan-coding-python',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-02-21',
                'time' => '18:00',
                'poster' => 'techshare/2.jpg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Menggunakan Google Apps Script Pada Google Workspace Platform',
                'slug' => 'menggunakan-google-apps-script-pada-google-workspace-platform',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-02-07',
                'time' => '18:00',
                'poster' => 'techshare/1.jpeg',
                'speaker_id' => 1,
                'moderator_id' => 2,
                'wa_link' => 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],


        ])->each(function ($collection) {
            TechShare::create($collection);
        });
    }
}
