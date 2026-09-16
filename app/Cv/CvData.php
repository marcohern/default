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
    ];
  }

  function getSpanishInfo() {
    return [
      //Menu
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
        'solarch' => 'Arquitecto de Soluciones'
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
          'Nací en Santa Marta, Colombia el 15 de octubre de 1980. Soy el segundo hijo de un hermano mayor y dos hermanas menores. Desde temprana edad, me interesé por la tecnología y la programación, lo que me llevó a estudiar ingeniería de sistemas en la universidad.',
          'A lo largo de mi carrera, he trabajado en diversos proyectos de desarrollo de software, adquiriendo experiencia en diferentes lenguajes de programación y tecnologías. Me considero una persona apasionada por la innovación y siempre en busca de aprender y mejorar mis habilidades.',
          'En mi tiempo libre, disfruto leer, ver películas y jugar videojuegos. También me gusta viajar y experimentar nuevas culturas, lo que me ha permitido ampliar mi perspectiva y enriquecer mi experiencia personal y profesional.',
        ],
        'l_age' => 'Edad',
        'l_residence' => 'Residencia',
        'l_email' => 'Correo'
      ]
    ];
  }

  function getEnglishInfo() {
    return [
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
        'solarch' => 'Solutions Architect'
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
          'I was born in Santa Marta, Colombia on October 15, 1980. I am the second child of an older brother and two younger sisters. From a young age, I was interested in technology and programming, which led me to study systems engineering in university.',
          'Over the course of my career, I have worked on various software development projects, gaining experience in different programming languages and technologies. I consider myself a person passionate about innovation and always looking to learn and improve my skills.',
          'In my free time, I enjoy reading, watching movies, and playing video games. I also like traveling and experiencing new cultures, which has allowed me to broaden my perspective and enrich my personal and professional experience.'
        ],
        'l_age' => 'Age',
        'l_residence' => 'Residence',
        'l_email' => 'Email'
      ]
    ];
  }
}
