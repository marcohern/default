<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvExperiencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('cv_experiences')->insert([
        ['profile_id' => 1, 'title' => 'Senior .NET Developer', 'company_name' => 'CI&T', 'present'=> false, 'start' => '2024-10-16', 'end' => '2026-05-15',
          'url' => 'https://ciandt.com/', 'linkedin' => 'https://www.linkedin.com/company/ciandt/',
          'overview' => 'I was hired to support and develop applications for their customers focused on the financial sector.'
        ],
        ['profile_id' => 1, 'title' => 'Tech Lead', 'company_name' => 'BairesDev', 'present'=> false, 'start' => '2022-08-16', 'end' => '2024-07-15',
          'url' => 'https://www.bairesdev.com/', 'linkedin' => 'https://www.linkedin.com/company/bairesdev/',
          'overview' => 'Taken in to lead some projects focused on .NET Backend, REST APIs and traditional .NET MVC web sites.'
        ],
        ['profile_id' => 1, 'title' => 'Tech Lead', 'company_name' => 'Jalasoft', 'present'=> false, 'start' => '2019-03-16', 'end' => '2022-08-15',
          'url' => 'https://www.jalasoft.com/', 'linkedin' => 'https://www.linkedin.com/company/jalasoft/',
          'overview' => 'Bolivian company that was eager to develop web apps for clients in US and Canada.'
        ],
      ]);
    }
}
