<?php

namespace Database\Seeders\Cv;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CvArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      DB::table('cv_articles')->insert([
        ['profile_id' => 1, 'slug' => 'about-1', 'category' => 'about', 'locale' => 'en', 'ord'=> 1,
          'text' => 'I was born in Santa Marta, Colombia on October 15, 1980. I am the second child of an older brother and two younger sisters. Our father bought us an Apple II computer for the family, which sparked my interest in computing.'
        ],
        ['profile_id' => 1, 'slug' => 'about-1', 'category' => 'about', 'locale' => 'es', 'ord'=> 1,
          'text' => 'Nací en Santa Marta, Colombia el 15 de octubre de 1980. Soy el segundo hijo de un hermano mayor y dos hermanas menores. Nuestro padre nos compro una computadora Apple II para la familia, lo cual inicio mi interes por la computacion.'
        ],
        ['profile_id' => 1, 'slug' => 'about-2', 'category' => 'about', 'locale' => 'en', 'ord'=> 2,
          'text' => 'But it was around the age of 2 that we got an Intel 386 PC at 30 Mhz (44 if you pressed turbo) when I really got to experience computing. I even tried to learn to program on my own in Basic with a console text editor. It was in college that I learned to program formally, and after that, I never looked back.'
        ],
        ['profile_id' => 1, 'slug' => 'about-2', 'category' => 'about', 'locale' => 'es', 'ord'=> 2,
          'text' => 'Pero fue al rededor de mis 2 años, conseguimos una PC Intel 386 de 30 Mhz (44 si undias el turbo) cuando realmente pude experimentar con la computacion. Incluso intentando aprender a programar yo solo en Basic con un editor de texto de consola. Fue en la Universidad que aprendi a programar formalmente, y luego de eso, no mire atras.'
        ],
        ['profile_id' => 1, 'slug' => 'about-3', 'category' => 'about', 'locale' => 'en', 'ord'=> 3,
          'text' => 'In my free time, I enjoy watching movies, playing video games, and going to the gym three times a week. I also like to experiment with code to clarify ideas (yes, I have fun coding). I am always open to exploring and learning new technologies and having fun while doing it.'
        ],
        ['profile_id' => 1, 'slug' => 'about-3', 'category' => 'about', 'locale' => 'es', 'ord'=> 3,
          'text' => 'En mi tiempo libre, disfruto ver peliculas, jugar video juegos, y asisto al gym 3 veces por semana. Tambien me gusta experimentar con el codigo para aclarar ideas (asi es, me divierto codificando). Siempre estoy abierto para explorar y aprender nuevas tecnologias y divertirme mientras lo hago.'
        ],
      ]);
    }
}
