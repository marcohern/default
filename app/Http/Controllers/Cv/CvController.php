<?php

namespace App\Http\Controllers\Cv;

use App\Daos\Cv\CvProfileDao;
use App\Mail\Cv\ContactMe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class CvController extends Controller
{
  public function __construct(
    private CvProfileDao $dao)
  { }

  public function view()
  {
    App::setLocale('en');
    return view('cv', ['profile' => $this->dao->find(1, 'en')]);
  }

  public function viewEs()
  {
    App::setLocale('es');
    return view('cv', ['profile' => $this->dao->find(1, 'es')]);
  }

  public function viewEn()
  {
    App::setLocale('en');
    return view('cv', ['profile' => $this->dao->find(1, 'es')]);
  }
  
  public function contact(Request $r)
  {
    $name = $r->input('name');
    $email = $r->input('email');
    $content = $r->input('message');
      Mail::to('marcohern@gmail.com')->send(new ContactMe($email, $name, $content));
    return ['status' => 1];
  }
}
