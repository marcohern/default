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
          'overview' => 'Successfull Bolivian software company filled with young, fun and eager developers.'
        ],
        ['profile_id' => 1, 'title' => 'Senior Software Engineer', 'company_name' => 'Cafeto', 'present'=> false, 'start' => '2018-06-16', 'end' => '2019-03-15',
          'url' => 'https://cafetosoftware.com/', 'linkedin' => 'https://www.linkedin.com/company/jalasoft/',
          'overview' => 'Rag tag group of developers operating from Cali, Colombia. E very fun environment to work in.'
        ],
        ['profile_id' => 1, 'title' => 'Senior .NET Developer', 'company_name' => 'Global Accelerator Partners', 'present'=> false, 'start' => '2017-02-16', 'end' => '2018-05-15',
          'url' => 'https://www.growthaccelerationpartners.com/', 'linkedin' => 'https://www.linkedin.com/company/growth-acceleration-partners/',
          'overview' => 'Staff Aughmentation Company based in Medellin, Antioquia. Excelent environment and people.'
        ],
        ['profile_id' => 1, 'title' => 'Software Engineer', 'company_name' => 'Globant', 'present'=> false, 'start' => '2014-01-16', 'end' => '2016-06-15',
          'url' => 'https://www.globant.com/', 'linkedin' => 'https://www.linkedin.com/company/globant/',
          'overview' => 'Staff Aughmentation Company based in Medellin, Antioquia. Excelent environment and people.'
        ],
        ['profile_id' => 1, 'title' => 'Software Engineer', 'company_name' => 'Intcomex', 'present'=> false, 'start' => '2008-09-16', 'end' => '2013-12-15',
          'url' => 'https://www.intcomex.com/', 'linkedin' => 'https://www.linkedin.com/company/intcomex/',
          'overview' => 'Tech distribution company, at the time with an in-house IT department. A vero formative experience for me.'
        ],
        ['profile_id' => 1, 'title' => 'Software Consultant', 'company_name' => 'Informatica Siglo 21', 'present'=> false, 'start' => '2006-03-16', 'end' => '2008-09-15',
          'url' => null, 'linkedin' => 'https://www.linkedin.com/company/inform-tica-siglo-21-ltda/',
          'overview' => 'Tech distribution company, at the time with an in-house IT department. A vero formative experience for me.'
        ],
      ]);
    }
}
