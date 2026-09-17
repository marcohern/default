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
            'residence' => 'Colombia',
            'email' => 'marcohern@gmail.com',
            'birth' => '1980-10-15',
            'intro' => 'Hello there! I am a software engineer with over 20 years of experience in the industry.' .
              ' I have worked on a variety of projects, from small startups to large enterprises.' .
              ' I am passionate about technology and I am always looking for new challenges.',
            'sluggable' => false
        ]);
    }
}
