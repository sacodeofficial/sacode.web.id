<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Playgrounsds;
=======
use App\Models\Playgrounds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> ce5e8e6ce9447abf17d9f5cb6113a3c797dd4f1e

class PlaygroundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
<<<<<<< HEAD
                'title' => 'sacode-official',
                'slug' => 'pt noken inovasi teknologi informasi',
                'description' => 'co pt.nokensoft',
                'image' => 'playgrounds/janzenfaidiban.png ',
                'repository_url' => 'https://github.com/janzenfaidiban',
                'user_id' => '1',
            ],
            [
                'title' => 'sacode-official',
                'slug' => 'sacode-official',
                'description' => 'Papua Tech Community',
                'image' => 'playgrounds/samuel-bosawer.png',
                'repository_url' => 'https://github.com/samuelbosawer',
                'user_id' => '2',
            ],
            [
                'title' => 'sacode-official',
                'slug' => 'sacode-official',
                'description' => 'Papua Tech Community',
                'image' => 'playgrounds/belinda-elisabeth.png',
                'repository_url' => 'https://github.com/belindaelisabeth',
                'user_id' => '3',
=======
                'title' => 'Laravel Playground',
                'slug' => 'laravel-playground',
                'description' => 'Belajar Framework PHP Laravel',
                'image' => 'laravel-playground.png',
                'repository_url' => 'https://github.com/sacodeofficial',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'JavaScript Playground',
                'slug' => 'javascript-playground',
                'description' => 'Belajar Framework JavaScript',
                'image' => 'javascript-playground.png',
                'repository_url' => 'https://github.com/sacodeofficial',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => null,
>>>>>>> ce5e8e6ce9447abf17d9f5cb6113a3c797dd4f1e
            ],

        ])->each(function ($collection) {
            Playgrounds::create($collection);
        });
    }
}
