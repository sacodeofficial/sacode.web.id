<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Api;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'title' => 'SaCode Blog',
                'endpoint' => 'https://public-api.wordpress.com/rest/v1.1/sites/blogsacode.wordpress.com/posts',
                'created_at' => now(),
            ],
            [
                'title' => 'GitHub Followers',
                'endpoint' => 'https://api.github.com/users/sacodeofficial/followers',
                'created_at' => now(),
            ]
        ])->each(function ($collection) {
            Api::create($collection);
        });
    }
}
