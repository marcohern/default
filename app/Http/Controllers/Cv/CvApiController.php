<?php

namespace App\Http\Controllers\Cv;

use App\Http\Controllers\Controller;
use App\Models\Cv\CvProfile;
use App\Models\Cv\CvJobTitle;
use Illuminate\Http\Request;

class CvApiController extends Controller
{
    //
    public function __construct() {

    }

    public function profiles() {
      return CvProfile::all();
    }

    public function profile(string $id) {
      return CvProfile::with([
        'jobTitles',
        'workExperiences' => function ($query) {
          $query->orderBy('start', 'desc');
        },
        'educationExperiences' => function ($query) {
          $query->orderBy('start', 'desc');
        },
      ])->find($id);
    }

    public function jobTitles() {
      return CvJobTitle::all();
    }

    public function experiences() {
      return CvJobTitle::all();
    }
}
