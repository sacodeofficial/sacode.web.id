<?php

namespace Database\Seeders;

use App\Models\Playgrounds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaygroundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
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
            ],

        ])->each(function ($collection) {
            Playgrounds::create($collection);
        });
    }
}
