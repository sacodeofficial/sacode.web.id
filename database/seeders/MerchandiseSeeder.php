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
                'title' => 'Papuan Coders 2024',
                'slug' => 'papuan-coders',
                'description' => 'T-Shirt SaCode',
                'thumbnail' => '1.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),

            ],
            [
                'title' => 'While (Alive)',
                'slug' => 'while-alive',
                'description' => 'T-Shirt SaCode',
                'thumbnail' => '2.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Papua Tech',
                'slug' => 'papua-tech',
                'description' => 'T-Shirt SaCode',
                'thumbnail' => '3.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Kopi Coding',
                'slug' => 'kopi-coding',
                'description' => 'T-Shirt SaCode',
                'thumbnail' => '4.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'title' => 'Pace Coding',
                'slug' => 'pace-coding',
                'description' => 'T-Shirt SaCode',
                'thumbnail' => '5.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],

        ])->each(function ($collection) {
            Merchandise::create($collection);
        });
    }

}
