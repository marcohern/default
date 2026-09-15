<?php

namespace App\Http\Controllers\Cv;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
  public function view()
  {
    $data = [
      'first_name' => 'Marco',
      'middle_name' => 'Alejandro',
      'last_name' => 'Hernández'
    ];
    return view('cv', $data);
  }
}
