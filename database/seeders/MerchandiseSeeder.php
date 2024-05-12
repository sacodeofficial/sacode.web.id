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
            ],
            [
                'title' => 'Papua Tech Community',
                'slug' => 'papuatechcommunity',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'papuatechcommunity.png',
                'order_link' => 'https://wa.link/cfpu61',
            ],
            [
                'title' => 'Pace Coding',
                'slug' => 'pacecoding',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'pacecoding.png',
                'order_link' => 'https://wa.link/cfpu61',
            ],
            [
                'title' => 'Kopi Coding',
                'slug' => 'kopicoding',
                'description' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'kopicoding.png',
                'order_link' => 'https://wa.link/cfpu61',
            ],

        ])->each(function ($collection) {
            Merchandise::create($collection);
        });
    }

}
