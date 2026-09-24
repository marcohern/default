<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('cv_clients')->insert([
        ['profile_id' => 1, 'ord'=> 1, 'logo_uri'=>'/logos/cit.svg',              'web_uri'=>'https://ciandt.com/'           ,'title'=>'CI&T'],
        ['profile_id' => 1, 'ord'=> 2, 'logo_uri'=>'/logos/cmgfi.svg',            'web_uri'=>'https://www.cmgfi.com/'        ,'title'=>'CMG Finantial'],
        ['profile_id' => 1, 'ord'=> 3, 'logo_uri'=>'/logos/bairesdev.svg',        'web_uri'=>'https://www.bairesdev.com/'    ,'title'=>'BairesDev'],
        ['profile_id' => 1, 'ord'=> 4, 'logo_uri'=>'/logos/omnimed.svg',          'web_uri'=>'https://www.omnimed.ai/'       ,'title'=>'Omnimed'],
        ['profile_id' => 1, 'ord'=> 5, 'logo_uri'=>'/logos/dealerrater.svg',      'web_uri'=>'https://www.dealerrater.com'   ,'title'=>'DealerRater'],
        ['profile_id' => 1, 'ord'=> 6, 'logo_uri'=>'/logos/cafeto.svg',           'web_uri'=>'https://www.cafetosoftware.com','title'=>'Cafeto'],
        ['profile_id' => 1, 'ord'=> 7, 'logo_uri'=>'/logos/globant.svg',          'web_uri'=>'https://globant.com/'          ,'title'=>'Globant'],
        ['profile_id' => 1, 'ord'=> 8, 'logo_uri'=>'/logos/carnival.svg',         'web_uri'=>'https://www.carnival.com/'     ,'title'=>'Carnival'],
        ['profile_id' => 1, 'ord'=> 9, 'logo_uri'=>'/logos/gap.svg',              'web_uri'=>'https://www.gap.com/'          ,'title'=>'The GAP'],
        ['profile_id' => 1, 'ord'=>10, 'logo_uri'=>'/logos/gire.svg',             'web_uri'=>'https://www.gire.com/'         ,'title'=>'GIRE'],
        ['profile_id' => 1, 'ord'=>11, 'logo_uri'=>'/logos/american-airlines.svg','web_uri'=>'https://www.aa.com/'           ,'title'=>'American Airlines'],
        ['profile_id' => 1, 'ord'=>12, 'logo_uri'=>'/logos/intcomex.svg',         'web_uri'=>'https://www.intcomex.com/'     ,'title'=>'Intcomex']
      ]);
    }
}
