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
                'id' => 8,
                'title' => 'Ionic',
                'slug' => 'ionic',
                'description' => 'SaCode Playground for Ionic Framework',
                'image' => 'playgrounds/sacode-playground-ionic-framework.png',
                'repository_url' => 'https://github.com/sacodeofficial/ionic-framework-playground',
                'user_id' => '1',
            ],
            [
                'id' => 7,
                'title' => 'Leaflet.js',
                'slug' => 'leafletjs',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-leafletjs.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'id' => 6,
                'title' => 'ApexChart.js',
                'slug' => 'apexchartjs',
                'description' => 'SaCode Playground for ApexChart.js',
                'image' => 'playgrounds/sacode-playground-apexcharts.png',
                'repository_url' => 'https://github.com/sacodeofficial/apexcharts-playground',
                'user_id' => '1',
            ],
            [
                'id' => 5,
                'title' => 'Alpine.js',
                'slug' => 'alpinejs',
                'description' => 'SaCode Playground for Alpine.js Library',
                'image' => 'playgrounds/sacode-playground-alpinejs.png',
                'repository_url' => 'https://github.com/sacodeofficial/alpinejs-playground',
                'user_id' => '1',
            ],
            [
                'id' => 4,
                'title' => 'Laravel Livewire',
                'slug' => 'laravel-livewire',
                'description' => 'SaCode Playground for Laravel Livewire',
                'image' => 'playgrounds/sacode-playground-laravel-livewire.png',
                'repository_url' => 'https://github.com/sacodeofficial/laravel-livewire-plyground',
                'user_id' => '1',
            ],
            [
                'id' => 3,
                'title' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'SaCode Playground for Laravel Framework',
                'image' => 'playgrounds/sacode-playground-laravel.png',
                'repository_url' => 'https://github.com/sacodeofficial/laravel-livewire-plyground',
                'user_id' => '1',
            ],
            [
                'id' => 2,
                'title' => 'Tailwind CSS',
                'slug' => 'tailwind-css',
                'description' => 'SaCode Playground for Tailwind CSS Framework',
                'image' => 'playgrounds/sacode-playground-tailwindcss.png',
                'repository_url' => 'https://github.com/sacodeofficial/tailwind-css-playground',
                'user_id' => '1',
            ],
            [
                'id' => 1,
                'title' => 'JavaScript',
                'slug' => 'javascript',
                'description' => 'SaCode Playground for JavaScript',
                'image' => 'playgrounds/sacode-playground-javascript.png',
                'repository_url' => 'https://github.com/sacodeofficial/javascript-playground',
                'user_id' => '1',
            ],
        ])->each(function ($collection) {
            Playgrounds::create($collection);
        });
    }
}
