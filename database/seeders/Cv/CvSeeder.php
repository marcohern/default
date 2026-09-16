<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Cv\CvProfilesSeeder;
use Database\Seeders\Cv\CvJobTitlesSeeder;
use Database\Seeders\Cv\CvServicesSeeder;

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
      ]);
    }
}
