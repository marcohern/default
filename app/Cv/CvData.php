<?php

namespace App\Cv;

class CvData
{
  function getInfo()
  {
    $age = date('Y') - 1980 - (date('md') < 1015 ? 1 : 0);
    return [
      'first_name' => 'Marco',
      'middle_name' => 'Alejandro',
      'last_name' => 'Hernández',
      'email' => 'marcohern@gmail.com',
      'age' => $age,
      'residence' => 'Colombia',

      'facebook' => 'https://www.facebook.com/marcohern',
    ];
  }

  function getSpanishInfo() {
    return [
      //Menu
      'dev_ribbon' => 'En Mantenimiento',
      'description' => 'Este es el portafolio Personal de Marco Hernandez. Ingeniero de Software con mas de 20 años de experiencia en la industria.',
      'home' => 'Inicio',
      'about' => 'Acerca de',
      'resume' => 'Curriculum',
      'portfolio' => 'Portafolio',
      'contacts' => 'Contacto',
      'download_cv' => 'Descargar CV',

      //Job Titles
      'job_titles' => [
        'consultant' => 'Consultor',
        'mentour' => 'Mentor',
        'fullstack' => 'Desarrollador Full Stack',
        'web' => 'Desarrollador Web',
        'solarch' => 'Arquitecto de Soluciones',
        'softeng' => 'Ingeniero de Software Senior',
      ],
      'contact_me' => 'Contáctame',
      'intro' => '¡Hola! Soy un ingeniero de software con más de 20 años de experiencia en la industria.' .
        'He trabajado en una variedad de proyectos, desde pequeñas startups hasta grandes empresas.' .
        'Me apasiona la tecnología y siempre estoy buscando nuevos desafíos.',

      //About
      'about_info' => [
        'about_me' => 'Acerca de mí',
        'my_story' => 'Mi historia',
        'my_story_items' => [
          
          'Nací en Santa Marta, Colombia el 15 de octubre de 1980. Soy el segundo hijo de un hermano mayor y dos hermanas menores. Nuestro padre nos compro una computadora Apple II para la familia, lo cual inicio mi interes por la computacion.',
          'Pero fue al rededor de mis 2 años, conseguimos una PC Intel 386 de 30 Mhz (44 si undias el turbo) cuando realmente pude experimentar con la computacion. Incluso intentando aprender a programar yo solo en Basic con un editor de texto de consola. Fue en la Universidad que aprendi a programar formalmente, y luego de eso, no mire atras.',
          'En mi tiempo libre, disfruto ver peliculas, jugar video juegos, y asisto al gym 3 veces por semana. Tambien me gusta experimentar con el codigo para aclarar ideas (asi es, me divierto codificando). Siempre estoy abierto para explorar y aprender nuevas tecnologias y divertirme mientras lo hago.',
        ],
        'l_age' => 'Edad',
        'l_residence' => 'Residencia',
        'l_email' => 'Correo',
        'services' => 'Servicios',
        'what_i_do' => 'Qué hago',
        'what_i_do_items' => [
          ['icon'=> 'fa-code', 'title' => 'Desarrollo de aplicacion', 'description' => 'Construyo applicaciones a la medida para satisfacer las necesidades de mis clientes.'],
          ['icon'=> 'fab fa-chrome', 'title' => 'Desarrollo web', 'description' => 'Doy soporte y optimizacion para aplicaciones web existentes.'],
          ['icon'=> 'fa-code', 'title' => 'Arquitecto de Soluciones', 'description' => 'Ayudo a mis clientes a diseñar y construir soluciones de software escalables y sostenibles.'],
          ['icon'=> 'fa-gamepad', 'title' => 'Desarrollo de Videojuegos', 'description' => 'Nadie me cree pero algun dia terminare mi propio video juego y Blizzard se sentira muy tonto por no contratarme aquella vez que le envie mi hoja de vida.'],
          ['icon'=> 'fa-video', 'title' => 'Renderizacion 3D y Video', 'description' => 'he trabajado en marketing haciendo animaciones y produccion de videos.'],
        ]
      ],

      //Resume
      'resume_info' => [
        'l_experience' => 'Experiencia',
        'l_studied_at' => 'Estudié en',
        'l_education' => 'Educación',
        'l_skills' => 'Habilidades',
        'l_coding_skills' => 'Codificando'
      ]
    ];
  }

  function getEnglishInfo() {
    return [
      'dev_ribbon' => 'Under Development',
      'description' => 'This is the Personal Portfolio of Marco Hernandez. A software engineer with over 20 years of experience in the industry.',
      //Menu
      'home' => 'Home',
      'about' => 'About',
      'resume' => 'Resume',
      'portfolio' => 'Portfolio',
      'contacts' => 'Contact',
      'download_cv' => 'Download CV',

      //Job Titles
      'job_titles' => [
        'consultant' => 'Consultant',
        'mentour' => 'Mentour',
        'fullstack' => 'Full Stack Developer',
        'web' => 'Web Development',
        'solarch' => 'Solutions Architect',
        'softeng' => 'Senior Software Engineer',
      ],
      'contact_me' => 'Contact Me',
      'intro' => 'Hello there! I am a software engineer with over 20 years of experience in the industry.' .
        'I have worked on a variety of projects, from small startups to large enterprises.' .
        'I am passionate about technology and I am always looking for new challenges.',

      //About
      'about_info' => [
        'about_me' => 'About Me',
        'my_story' => 'My Story',
        'my_story_items' => [
          'I was born in Santa Marta, Colombia on October 15, 1980. I am the second child of an older brother and two younger sisters. Our father bought us an Apple II computer for the family, which sparked my interest in computing.',
          'But it was around the age of 2 that we got an Intel 386 PC at 30 Mhz (44 if you pressed turbo) when I really got to experience computing. I even tried to learn to program on my own in Basic with a console text editor. It was in college that I learned to program formally, and after that, I never looked back.',
          'In my free time, I enjoy watching movies, playing video games, and going to the gym three times a week. I also like to experiment with code to clarify ideas (yes, I have fun coding). I am always open to exploring and learning new technologies and having fun while doing it.',
        ],
        'l_age' => 'Age',
        'l_residence' => 'Residence',
        'l_email' => 'Email',
        'services' => 'Services',
        'what_i_do' => 'What I Do',
        'what_i_do_items' => [
          ['icon'=> 'fa-code', 'title' => 'Application Development', 'description' => 'I build custom applications to meet the needs of my clients.'],
          ['icon'=> 'fab fa-chrome', 'title' => 'Web Development', 'description' => 'I provide support and optimization for existing web applications.'],
          ['icon'=> 'fa-brain', 'title' => 'Solutions Architect', 'description' => 'I help my clients design and build scalable and sustainable software solutions.'],
          ['icon'=> 'fa-gamepad', 'title' => 'Video Game Development', 'description' => "No one believes me but someday I will finish my own video game and Blizzard will feel very stupid for not hiring me that time I sent them my resume."],
          ['icon'=> 'fa-video', 'title' => '3D Rendering and Video', 'description' => 'I have worked in marketing doing animations and video production.'],
        ]
      ],

      //Resume
      'resume_info' => [
        'l_experience' => 'Experience',
        'l_studied_at' => 'Studied at',
        'l_education' => 'Education',
        'l_skills' => 'Skills',
        'l_coding_skills' => 'Coding Skills'
      ]
    ];
  }
}
