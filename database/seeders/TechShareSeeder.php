<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TechShare;

class TechShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'title' => 'Menggunakan Google Apps Script Pada Google Workspace Platform',
                'slug' => 'menggunakan-google-apps-script-pada-google-workspace-platform',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-05-06',
                'time' => '19:00',
                'poster' => 'techshare/01.png',
                'speaker_id' => 1,
                'moderator_id' => 2,
            ],
            [
                'title' => 'Menggunakan Google Apps Script Pada Google Workspace Platform',
                'slug' => 'menggunakan-google-apps-script-pada-google-workspace-platform',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-05-06',
                'time' => '19:00',
                'poster' => 'techshare/01.png',
                'speaker_id' => 1,
                'moderator_id' => 2,
            ],
            [
                'title' => 'Menggunakan Google Apps Script Pada Google Workspace Platform',
                'slug' => 'menggunakan-google-apps-script-pada-google-workspace-platform',
                'description' => 'Deskripsi singkat di sini...',
                'date' => '2024-05-06',
                'time' => '19:00',
                'poster' => 'techshare/01.png',
                'speaker_id' => 1,
                'moderator_id' => 2,
            ],
  
        ])->each(function ($techShareData) {
            TechShare::create($techShareData);
        });
    }
}
