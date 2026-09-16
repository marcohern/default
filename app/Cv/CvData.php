<?php

namespace App\Cv;

class CvData
{
  function getInfo()
  {
    return [
      'first_name' => 'Marco',
      'middle_name' => 'Alejandro',
      'last_name' => 'Hernández'
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

    ];
  }
}
