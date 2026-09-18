<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvLanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      DB::table('cv_languages')->insert([
        ['profile_id' => 1, 'name' => 'English', 'locale' => 'en', 'ord'=> 1, 'score' => 100,
          'description' => 'Learned english from very young, got a C2 on my IELTS test. No cap.',
        ],
        ['profile_id' => 1, 'name' => 'Español', 'locale' => 'es', 'ord'=> 2, 'score' => 100,
          'description' => 'Mi idioma nativo.',
        ],
        ['profile_id' => 1, 'name' => 'Français', 'locale' => 'fr', 'ord'=> 3, 'score' => 8,
          'description' => 'Je ne parle pas beaucoup, ni très bien.',
        ],
      ]);
    }
}
