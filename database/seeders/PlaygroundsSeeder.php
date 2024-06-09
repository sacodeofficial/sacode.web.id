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
                'title' => 'Alpine.js',
                'slug' => 'alpine-js',
                'description' => 'SaCode Playground for Alpine.js Library',
                'image' => 'playgrounds/sacode-playground-alpinejs.png',
                'repository_url' => 'https://github.com/sacodeofficial/alpinejs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
            [
                'title' => 'Leaflet.js',
                'slug' => 'leaflet-js',
                'description' => 'SaCode Playground for Leaflet.js',
                'image' => 'playgrounds/sacode-playground-template.png',
                'repository_url' => 'https://github.com/sacodeofficial/leafletjs-playground',
                'user_id' => '1',
            ],
        ])->each(function ($collection) {
            Playgrounds::create($collection);
        });
    }
}
