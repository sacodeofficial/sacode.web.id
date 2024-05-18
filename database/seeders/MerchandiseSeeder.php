<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Merchandise;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'title' => 'Papuan Coders',
                'slug' => 'papuan-coders',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'papuancoders.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),

            ],
            [
                'title' => 'Papua Tech Community',
                'slug' => 'papua-tech-community',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'papuatechcommunity.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Pace Coding',
                'slug' => 'pace-coding',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'pacecoding.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Kopi Coding',
                'slug' => 'kopi-coding',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'kopicoding.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],

        ])->each(function ($collection) {
            Merchandise::create($collection);
        });
    }

}
