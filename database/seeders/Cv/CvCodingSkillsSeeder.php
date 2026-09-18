<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvCodingSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      DB::table('cv_coding_skills')->insert([
        ['profile_id' => 1, 'ord' => 1, 'title' => 'C#', 'score' => 98,
          'text' => 'My comfort zone.',
        ],
        ['profile_id' => 1, 'ord' => 2, 'title' => '.NET', 'score' => 85,
          'text' => 'The framework I work with most of the time.',
        ],
        ['profile_id' => 1, 'ord' => 3, 'title' => 'PHP', 'score' => 85,
          'text' => 'I learned this by myself.',
        ],
        ['profile_id' => 1, 'ord' => 4, 'title' => 'Laravel', 'score' => 87,
          'text' => 'Can\'t live without it.',
        ],
        ['profile_id' => 1, 'ord' => 5, 'title' => 'Javascript', 'score' => 56,
          'text' => 'As a web developer, I have to deal with this.',
        ],
        ['profile_id' => 1, 'ord' => 6, 'title' => 'Typescript', 'score' => 72,
          'text' => 'Like javascript, but better.',
        ],
        ['profile_id' => 1, 'ord' => 7, 'title' => 'C++', 'score' => 80,
          'text' => 'I trained in this, still code in it.',
        ],
        ['profile_id' => 1, 'ord' => 8, 'title' => 'C', 'score' => 64,
          'text' => 'I keep it in the back burner.',
        ],
        ['profile_id' => 1, 'ord' => 9, 'title' => 'SQL', 'score' => 71,
          'text' => 'SQL Server, MySQL, PostGreSQL, SQLite. You know the gang.',
        ],
      ]);
    }
}
