<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dates')->insert([
            'start_date' => '2023-01-01',
            'end_date' => '2023-01-10'
        ]);
    }
}
