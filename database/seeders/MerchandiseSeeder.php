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
                'nama' => 'Kaos SaCode',
                'slug' => 'kaos-sacode',
                'deskripsi' => 'Baju SaCode dengan bahan terbaik',
                'thumbnail' => 'kaos-sacode.jpg',
                'harga' => 100000,
                'stok' => 10,
                'status' => 'ready',
                'size' => 'M,L,XL',
                'color' => 'black',
            ],
            [
                'nama' => 'Hoodie SaCode',
                'slug' => 'hoodie-sacode',
                'deskripsi' => 'Hoodie SaCode dengan bahan terbaik',
                'thumbnail' => 'hoodie.jpg',
                'harga' => 100000,
                'stok' => 15,
                'status' => 'ready',
                'size' => 'M,L,XL',
                'color' => 'black',
            ],
            [
                'nama' => 'Switer SaCode',
                'slug' => 'switer-sacode',
                'deskripsi' => 'Switer SaCode dengan bahan terbaik',
                'thumbnail' => 'switer.jpg',
                'harga' => 100000,
                'stok' => 10,
                'status' => 'ready',
                'size' => 'M,L,XL',
                'color' => 'black',
            ],

        ])->each(function ($merchandiseData) {
            Merchandise::create($merchandiseData);
        });
    }

}
