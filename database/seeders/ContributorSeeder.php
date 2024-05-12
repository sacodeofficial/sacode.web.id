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
                'name' => 'Belinda Pigome',
                'job_title' => 'Trainer Assistant, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/belinda-pigome-148894134/',
                'github' => 'https://github.com/belindaelisabeth',
                'picture' => 'belinda-pigome.png',
            ],
            [
                'name' => 'Janzen Faidiban',
                'job_title' => 'Trainer Assistant, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/janzenfaidiban/',
                'github' => 'https://github.com/janzenfaidiban',
                'picture' => 'janzen-faidiban.png',
            ],
            [
                'name' => 'Samuel Bosawer',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/samuel-bosawer-8a278b239/',
                'github' => 'https://github.com/samuelbosawer',
                'picture' => 'samuel-bosawer.png',
            ],
        ])->each(function ($collection) {
            Contributor::create($collection);
        });
    }
}
