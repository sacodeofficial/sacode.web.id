<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contributor;

class ContributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama' => 'Belinda Pigome',
                'job_desc' => 'Trainer Assistant, Speaker, Moderator',
                'sosial_media' => 'https://github.com/belindapigome',
                'photo' => 'contoh1.jpg',
            ],
            [
                'nama' => 'Janzen Faidiban',
                'job_desc' => 'Trainer, Speaker, Moderator',
                'sosial_media' => 'https://github.com/janzenfaidiban',
                'photo' => 'contoh2.jpg',
            ],
            [
                'nama' => 'Nama Contributor Ketiga',
                'job_desc' => 'Trainer, Speaker, Moderator',
                'sosial_media' => 'https://github.com/sbosawer',
                'photo' => 'contoh3.jpg',
            ],
        ])->each(function ($contributorData) {
            Contributor::create($contributorData);
        });
    }
}
