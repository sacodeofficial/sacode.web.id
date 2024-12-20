<?php

namespace Database\Seeders;

use App\Models\Contributor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'slug' => 'belinda-pigome',
                'job_title' => 'Trainer Assistant, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/belinda-pigome-148894134/',
                'github' => 'https://github.com/belindaelisabeth',
                'picture' => 'belinda-pigome.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Janzen Faidiban',
                'slug' => 'janzen-faidiban',
                'job_title' => 'Trainer Assistant, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/janzenfaidiban/',
                'github' => 'https://github.com/janzenfaidiban',
                'picture' => 'janzen-faidiban.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Samuel Bosawer',
                'slug' => 'samuel-bosawer',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/samuel-bosawer-8a278b239/',
                'github' => 'https://github.com/samuelbosawer',
                'picture' => 'samuel-bosawer.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Jonas Ualubun',
                'slug' => 'jonas-ualubun',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/jonas-ualubun-534a3a150/',
                'github' => 'https://github.com/atjas',
                'picture' => 'jonas-ualubun.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Elly Ansek',
                'slug' => 'speaker-moderator',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => '',
                'github' => 'https://github.com/ellyansek18',
                'picture' => 'elly-ansek.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Efati Geovani Isir',
                'slug' => 'efati-geovani-isir',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/efati-geovani-isir-878757282/?originalSubdomain=id',
                'github' => 'https://github.com/efatigeovaniisir',
                'picture' => 'efati-isir.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nick Imbiri',
                'slug' => 'nick-imbiri',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/nick-imbiri-a221502b1/',
                'github' => '',
                'picture' => 'nick-imbiri.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Septemina Waisimon',
                'slug' => 'septemina-waisimon',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => 'https://github.com/septeminawai',
                'picture' => 'septemina-waisimon.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Billy Rumbiak',
                'slug' => 'trainer-speaker-moderator',
                'job_title' => 'Trainer, Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/billy-rumbiak-1995juni/',
                'github' => 'https://github.com/billyrumbiak',
                'picture' => 'billy-rumbiak.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Obi Pranata',
                'slug' => 'obi-pranata',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/obi-pranata-47349b196/',
                'github' => 'https://github.com/obipranata',
                'picture' => 'obi-pranata.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Sulenias Asso',
                'slug' => 'sulenias-asso',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/suleniash-asso-85a864240/',
                'github' => 'https://github.com/sulenias',
                'picture' => 'sulenias-asso.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Amelia Kafiar',
                'slug' => 'amelia-kafiar',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'amelia-kafiar.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Cristoper Zonggonau',
                'slug' => 'speaker-moderator',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/kristovedus-zonggonau-02607787/',
                'github' => 'https://github.com/zonggonau',
                'picture' => 'cristoper-zonggonau.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Daniel Abisay',
                'slug' => 'Daniel-Abisay',
                'job_title' => 'Moderator',
                'linkedin' => ' https://www.linkedin.com/in/daniel-abisay-49a154333/',
                'github' => ' https://github.com/danielabisay',
                'picture' => 'daniel-abisay.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Maikel Kayame',
                'slug' => 'maikel-kayame',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => 'https://github.com/maikelkayame',
                'picture' => 'maikel-kayame.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Marselino Yogi',
                'slug' => 'marselino-yogi',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => '',
                'picture' => 'marselino-yogi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Johan Nasendi',
                'slug' => 'speaker-moderator',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/johannasendi/',
                'github' => 'https://github.com/johan-nasendi',
                'picture' => 'johan-nasendi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
             [
                'name' => 'Givens Lombo Griapon',
                'slug' => 'givens-lombo-griapon',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'givens-lombo-griapon.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Michel Irarya',
                'slug' => 'michael-irarya',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/michel-irarya-25383b30/?originalSubdomain=id',
                'github' => '',
                'picture' => 'michel-irarya.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'James Sraun',
                'slug' => 'james-sraun',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/jamessraun/?originalSubdomain=id',
                'github' => '',
                'picture' => 'james-sraun.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Patricia Dianita',
                'slug' => 'speaker',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/patriciadianita/?originalSubdomain=id',
                'github' => '',
                'picture' => 'patricia-dianita.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Noval Nauw',
                'slug' => 'noval-nauw',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/noval-nauw-2b352413b/',
                'github' => 'https://github.com/novalsmith',
                'picture' => 'noval-nauw.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Stenly Samberi',
                'slug' => 'stenly-samberi',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/stenly-samberi-a79813250/?originalSubdomain=id',
                'github' => 'https://github.com/stenlysamberi',
                'picture' => 'stenly-samberi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nico Koibur',
                'slug' => 'nico-koibur',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/nico-koibur-49b80649/',
                'github' => 'https://github.com/nicokoibur',
                'picture' => 'nico-koibur.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Israil Ondi',
                'slug' => 'israil-ondi',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'israil-ondi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nurvirta Monarizqa',
                'slug' => 'nurvirta-monarizqa',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'nurvirta-monarizqa.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Pascal Sapari',
                'slug' => 'pascal-sapari',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/pascal-safari-076aab2aa/?originalSubdomain=cd',
                'github' => '',
                'picture' => 'pascal-sapari.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Rendi Bayu Setiawan',
                'slug' => 'rendi-bayu-setiawan',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/rendi-bayu-setiawan-b968b4253/?originalSubdomain=id',
                'github' => '',
                'picture' => 'rendi-bayu-setiawan.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Theis Andatu',
                'slug' => 'theis-andatu',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => '',
                'github' => 'https://github.com/antheiz',
                'picture' => 'theis-andatu.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Vicky Irmanto',
                'slug' => 'vicky-irmanto',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/vicky-irmanto-7a5b971a0/?originalSubdomain=id',
                'github' => '',
                'picture' => 'vicky-irmanto.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Sugeng',
                'slug' => 'sugeng',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'sugeng.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Yoshua Gombo',
                'slug' => 'yoshua-gombo',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/yoshua-gombo/',
                'github' => '',
                'picture' => 'yoshua-gombo.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Yose Giyay',
                'slug' => 'yose-giyay',
                'job_title' => 'Speaker, Moderator',
                'linkedin' => 'https://www.linkedin.com/in/yose-marthin-giyay-22241b151/',
                'github' => 'https://github.com/yohn-maistre',
                'picture' => 'yose-giyay.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Yan Heluka',
                'slug' => 'yan-heluka',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'yan-heluka.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'William Silalahi',
                'slug' => 'william-silalahi',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'william-silalahi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Jonathan Smith',
                'slug' => 'jonathan-smith',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/jonathan-smith-2a12aa36/',
                'github' => '',
                'picture' => 'jonathan-smith.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Ricky Pekei',
                'slug' => 'ricky-pekei',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/rickypekei/?locale=in_ID',
                'github' => '',
                'picture' => 'ricky-pekei.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Vicky Irmanto',
                'slug' => 'vicky-irmanto',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/vicky-irmanto-7a5b971a0/?originalSubdomain=id',
                'github' => '',
                'picture' => 'vicky-irmanto.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Nae Unani',
                'slug' => 'nae-unani',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'nae-unani.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Ian Carlos',
                'slug' => 'ian-carlos',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'ian-carlos.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Daniel Pepuho',
                'slug' => 'daniel-pepuho',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/daniel-pepuho/?trk=public_profile_browsemap&originalSubdomain=id',
                'github' => 'https://github.com/danielcristho',
                'picture' => 'daniel-pepuho.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Agnes Suyanto',
                'slug' => 'agnes-suyanto',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/agnes-huberta-suyanto-0a4393135/',
                'github' => '',
                'picture' => 'agnes-suyanto.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Akira Rizky',
                'slug' => 'akira-rizky',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/akira-rizky-555297207/?originalSubdomain=id',
                'github' => 'https://github.com/AkiraRizky',
                'picture' => 'akira-rizky.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Daniel Sedik',
                'slug' => 'daniel-sedik',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/daniel-sedik/?originalSubdomain=id',
                'github' => 'https://github.com/danielsedik',
                'picture' => 'daniel-sedik.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Haris Djafar',
                'slug' => 'haris-djafar',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/haris-djafar-751923129/',
                'github' => 'https://github.com/abduldjafar',
                'picture' => 'haris-djafar.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Hendrik Eka',
                'slug' => 'hendrik-eka',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'hendrik-eka.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Wahyu Boseren',
                'slug' => 'wahyu-boseren',
                'job_title' => 'Speaker',
                'linkedin' => '',
                'github' => '',
                'picture' => 'wahyu-boseren.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Brian Unani',
                'slug' => 'brian-unani',
                'job_title' => 'Speaker',
                'linkedin' => 'https://www.linkedin.com/in/brian-unani-223731147/',
                'github' => '',
                'picture' => 'brian-unani.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Prama Danu',
                'slug' => 'prama-danu',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => '',
                'picture' => 'prama-danu.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Melpen Yogi',
                'slug' => 'melpen-yogi',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => 'https://github.com/melpenyogi',
                'picture' => 'melpen-yogi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Marshal Laurens',
                'slug' => 'marshal-laurens',
                'job_title' => 'Speaker',
                'linkedin' => false,
                'github' => '',
                'picture' => 'marshal-laurens.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Korius Wenda',
                'slug' => 'korius-wenda',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => 'https://github.com/koriuswenda',
                'picture' => 'korius-wenda.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Grasberg Nahumarury',
                'slug' => 'grasberg-nahumarury',
                'job_title' => 'Speaker',
                'linkedin' => false,
                'github' => '',
                'picture' => 'grasberg-nahumarury.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Mochammad Fachorrozi',
                'slug' => 'mochammad-fachorrozi',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => 'https://github.com/mochammad-fachorrozi',
                'picture' => 'mochammad-fachorrozi.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Paulus Sesa',
                'slug' => 'paulus-sesa',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => 'https://github.com/seanpaulsesa',
                'picture' => 'paulus-sesa.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Dodi Burman',
                'slug' => 'dodi-burman',
                'job_title' => 'Speaker',
                'linkedin' => false,
                'github' => '',
                'picture' => 'dodi-burman.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Jhelky Walliya',
                'slug' => 'jhelky-walliya',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => 'https://github.com/JhelkyWalliya',
                'picture' => 'jhelky-walliya.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Calvin Huby',
                'slug' => 'calvin-huby',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'calvin-huby.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Sultan Simon',
                'slug' => 'sultan-simon',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'contributor.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Adriano Affar',
                'slug' => 'adriano-affar',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'adriano-affar.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Korinus Pabika',
                'slug' => 'korinus-pabika',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'korinus-pabika.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Yeheskiel Jitmau',
                'slug' => 'yeheskiel-jitmau',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'contributor.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Jekson Tabuni',
                'slug' => 'jekson-tabuni',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'jekson-tabuni.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Huelilik D. Heluka',
                'slug' => 'heulilik-d-heluka',
                'job_title' => 'Speaker',
                'linkedin' => false,
                'github' => false,
                'picture' => 'heulilik-d-heluka.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Lidia Orain',
                'slug' => 'lidia-orain',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'contributor.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],
            [
                'name' => 'Asriel Usisba',
                'slug' => 'asriel-usisba',
                'job_title' => 'Moderator',
                'linkedin' => false,
                'github' => false,
                'picture' => 'contributor.png',
                'user_id' => fake()->numberBetween(1, 5),
                'published_at' => now(),
            ],


        ])->each(function ($collection) {
            Contributor::create($collection);
        });
    }
}
