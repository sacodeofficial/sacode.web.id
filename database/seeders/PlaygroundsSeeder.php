<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Playgrounsds;

class PlaygroundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
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
            ],

        ])->each(function ($collection) {
            Playgrounds::create($collection);
        });
    }
}
