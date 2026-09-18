<?php

namespace App\Http\Controllers\Cv;

use App\Daos\Cv\CvProfileDao;
use App\Http\Controllers\Controller;
use App\Mail\Cv\ContactMe;
use App\Models\Cv\CvJobTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CvApiController extends Controller
{
    //
    public function __construct(public CvProfileDao $cvProfileDao) {

    }

    public function profiles() {
      return CvProfile::all();
    }

    public function profile(string $id) {
      return $this->cvProfileDao->find($id, 'es');
    }

    public function jobTitles() {
      return CvJobTitle::all();
    }

    public function contact(Request $r) {
      $name = $r->input('name');
      $email = $r->input('email');
      $content = $r->input('message');
       Mail::to('marcohern@gmail.com')->send(new ContactMe($email, $name, $content));
      return ['status' => 1];
    }
}
