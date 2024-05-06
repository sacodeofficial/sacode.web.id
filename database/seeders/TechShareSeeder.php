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
                'judul' => 'Konsep Dasar Coding Dengan Bahasa Pemrograman JavaScript',
                'slug' => 'konsep-dasar-coding-dengan-bahasa-pemrograman-javascript',
                'deskripsi' => 'Belajar konsep dasar coding dengan bahasa pemrograman JavaScript',
                'moderator' => 'Samuel Bosawer',
                'speaker' => 'Janzen Faidiban',
                'job' => 'Full-Stack Developer',
                'tanggal' => '2024-05-06',
                'waktu' => '19:00',
                'thumbnail' => 'poster.jpg',
                'akun_github' => 'github.com/janzenfaidiban',
                'akun_linkedin' => 'linkedin.com/in/janzenfaidiban',
                'akun_instagram' => 'instagram.com/janzenfaidiban',
            ],
            [
                'judul' => 'Simulasi Sensor DHT22 Menggunakan Mikrokontroler ESP32, Wokwi dan Blynk',
                'slug' => 'simulasi-sensor-dht22-menggunakan-mikrokontroler-esp32-wokwi-dan-blynk',
                'deskripsi' => 'Belajar simulasi sensor DHT22 menggunakan mikrokontroler ESP32, Wokwi dan Blynk',
                'moderator' => 'Efati Isir',
                'speaker' => 'Elly Ansek',
                'job' => 'Web Developer',
                'tanggal' => '2024-04-26',
                'waktu' => '19:00',
                'thumbnail' => 'poster.jpg',
                'akun_github' => 'github.com/ellyansek',
                'akun_linkedin' => 'linkedin.com/in/ellyansek',
                'akun_instagram' => 'instagram.com/ellyansek',
            ],
            [
                'judul' => 'Membangun Aplikasi Full-Stack dengan Strapi, Next.js dan NextAuth.js',
                'slug' => 'membangun-aplikasi-full-stack-dengan-strapi-next-js-dan-nextauth-js',
                'deskripsi' => 'Belajar membangun aplikasi full-stack dengan Strapi, Next.js dan NextAuth.js',
                'moderator' => 'Janzen Faidiban',
                'speaker' => 'Cristoper Zonggonau',
                'job' => 'Full-Stack Developer',
                'tanggal' => '2024-03-11',
                'waktu' => '19:00',
                'thumbnail' => 'poster.jpg',
                'akun_github' => 'github.com/cristoperzonggonau',
                'akun_linkedin' => 'linkedin.com/in/cristoperzonggonau',
                'akun_instagram' => 'instagram.com/cristoperzonggonau',
            ],
  
        ])->each(function ($techShareData) {
            TechShare::create($techShareData);
        });
    }
}
