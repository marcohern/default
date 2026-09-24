<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Cv\CvProfilesSeeder;
use Database\Seeders\Cv\CvJobTitlesSeeder;
use Database\Seeders\Cv\CvServicesSeeder;
use Database\Seeders\Cv\CvExperiencesSeeder;
use Database\Seeders\Cv\CvEducationsSeeder;
use Database\Seeders\Cv\CvArticlesSeeder;
use Database\Seeders\Cv\CvLanguagesSeeder;
use Database\Seeders\Cv\CvCodingSkillsSeeder;
use Database\Seeders\Cv\CvClientsSeeder;

class CvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $this->call([
        CvProfilesSeeder::class,
        CvJobTitlesSeeder::class,
        CvServicesSeeder::class,
        CvExperiencesSeeder::class,
        CvEducationsSeeder::class,
        CvArticlesSeeder::class,
        CvLanguagesSeeder::class,
        CvCodingSkillsSeeder::class,
        CvClientsSeeder::class,
      ]);
    }
}
