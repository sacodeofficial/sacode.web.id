<?php

namespace Database\Seeders;

use App\Livewire\Guest\Merchandise;
use App\Livewire\Guest\TechShare;
use App\Models\Contributor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CodingSeeder::class,
            ContributorSeeder::class,
            MerchandiseSeeder::class,
            TechShareSeeder::class,
        ]);
    }
}
