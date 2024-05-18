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
                'slug' => 'papuancoders',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'papuancoders.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'publisher_id' => now(),

            ],
            [
                'title' => 'Papua Tech Community',
                'slug' => 'papuatechcommunity',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'papuatechcommunity.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'publisher_id' => now(),
            ],
            [
                'title' => 'Pace Coding',
                'slug' => 'pacecoding',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'pacecoding.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'publisher_id' => now(),
            ],
            [
                'title' => 'Kopi Coding',
                'slug' => 'kopicoding',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'kopicoding.png',
                'order_link' => 'https://wa.link/cfpu61',
                'user_id' => fake()->numberBetween(1, 5),
                'publisher_id' => now(),
            ],

        ])->each(function ($collection) {
            Merchandise::create($collection);
        });
    }

}
