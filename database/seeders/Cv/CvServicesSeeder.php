<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cv_services')->insert([
          ['profile_id'=>1, 'ord'=>1, 'icon_css'=> 'fas fa-code'        , 'title' => 'Application Development', 'text' => 'I build custom applications to meet the needs of my clients.'],
          ['profile_id'=>1, 'ord'=>2, 'icon_css'=> 'icon fab fa-chrome' , 'title' => 'Web Development'        , 'text' => 'I create, optimize and provide support for existing web applications.'],
          ['profile_id'=>1, 'ord'=>3, 'icon_css'=> 'fas fa-brain'       , 'title' => 'Solutions Architect'    , 'text' => 'I help my clients design and build scalable and sustainable software solutions.'],
          ['profile_id'=>1, 'ord'=>4, 'icon_css'=> 'icon fas fa-gamepad', 'title' => 'Video Game Development' , 'text' => "No one believes me but someday I will finish my own video game and Blizzard will feel very stupid for not hiring me that time I sent them my resume."],
          ['profile_id'=>1, 'ord'=>5, 'icon_css'=> 'fas fa-video'       , 'title' => '3D Rendering and Video' , 'text' => 'I have worked in marketing doing animations and video production.'],
        ]);
    }
}
