<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvEducationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      //
      DB::table('cv_educations')->insert([
        ['profile_id' => 1, 'degree' => 'Bachelor', 'school_name' => 'Santa Marta Bilingual School', 'present'=> false, 'start' => '1983-07-16', 'end' => '1997-06-15',
          'url' => 'https://www.bilinguesantamarta.edu.co/', 'linkedin' => null,
          'overview' => 'A Private school located in Santa Marta, Colombia. Here, I learned and could speak english by the time I was 10.'
        ],
        ['profile_id' => 1, 'degree' => '.NET Developer', 'school_name' => 'Gorge Tadeo Lozano University', 'present'=> false, 'start' => '2001-04-16', 'end' => '2003-04-15',
          'url' => 'https://www.utadeo.edu.co/', 'linkedin' => 'https://www.linkedin.com/company/universidad-jorge-tadeo-lozano/',
          'overview' => 'With a Goverment loan, I trained in the use of the .NET Framework to develop applications.'
        ],
        ['profile_id' => 1, 'degree' => 'Professional Systems Engineer', 'school_name' => 'Universidad Cooperativa de Colombia', 'present'=> false, 'start' => '2000-01-16', 'end' => '2005-12-15',
          'url' => 'https://www.universidad-cooperativa.co/', 'linkedin' => 'https://www.linkedin.com/school/universidad-cooperativa-de-colombia-ec-/',
          'overview' => 'I knew I wanted to focus on the information technology industry. So I studied the closest thing I had available: Systems Engineering. Not quite software engineering but, close enough.'
        ],
      ]);
    }
}
