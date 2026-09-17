<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cv_profiles')->insert([
            'id' => 1,
            'slug' => 'marcohern',
            'first_name' => 'Marco',
            'last_name' => 'Hernandez',
            'job_title' => 'Senior Software Engineer',
            'birth' => '1980-10-15',
            'intro' => 'profile_intro',
            'sluggable' => false
        ]);
    }
}
