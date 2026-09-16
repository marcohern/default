<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvJobTitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('cv_job_titles')->insert([
        ['profile_id' => 1, 'slug' => 'consultant', 'title' => 'Consultant', 'ord'=> 1],
        ['profile_id' => 1, 'slug' => 'mentour', 'title' => 'Mentour', 'ord'=> 2],
        ['profile_id' => 1, 'slug' => 'fullstack', 'title' => 'Full Stack Developer', 'ord'=> 3],
        ['profile_id' => 1, 'slug' => 'webdev', 'title' => 'Web Development', 'ord'=> 4],
        ['profile_id' => 1, 'slug' => 'solutions-architect', 'title' => 'Solutions Architect', 'ord'=> 5],
      ]);
    }
}
