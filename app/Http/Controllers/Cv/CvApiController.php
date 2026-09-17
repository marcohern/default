<?php

namespace App\Http\Controllers\Cv;

use App\Daos\Cv\CvProfileDao;
use App\Http\Controllers\Controller;
use App\Models\Cv\CvJobTitle;
use Illuminate\Http\Request;

class CvApiController extends Controller
{
    //
    public function __construct(public CvProfileDao $cvProfileDao) {

    }

    public function profiles() {
      return CvProfile::all();
    }

    public function profile(string $id) {
      return $this->cvProfileDao->find($id);
    }

    public function jobTitles() {
      return CvJobTitle::all();
    }
}
