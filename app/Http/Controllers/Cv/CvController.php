<?php

namespace App\Http\Controllers\Cv;

use App\Cv\CvData;
use App\Models\Cv\CvProfile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CvController extends Controller
{
  public function __construct(private CvData $cvData)
  { }

  public function view()
  {
    App::setLocale('en');
    $profile = CvProfile::with([
      'jobTitles',
      'workExperiences' => function ($query) {
        $query->orderBy('start', 'desc');
      },
      'educationExperiences' => function ($query) {
        $query->orderBy('start', 'desc');
      },
    ])->find(1);
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getEnglishInfo();
    $data = array_merge($info, $langInfo);
    $data['profile'] = $profile;
    return view('cv', $data);
  }

  public function viewEs()
  {
    App::setLocale('es');
    $profile = CvProfile::with([
      'jobTitles',
      'workExperiences' => function ($query) {
        $query->orderBy('start', 'desc');
      },
      'educationExperiences' => function ($query) {
        $query->orderBy('start', 'desc');
      },
    ])->find(1);
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getSpanishInfo();
    $data = array_merge($info, $langInfo);
    $data['profile'] = $profile;
    return view('cv', $data);
  }

  public function viewEn()
  {
    App::setLocale('en');
    $profile = CvProfile::with([
      'jobTitles',
      'workExperiences' => function ($query) {
        $query->orderBy('start', 'desc');
      },
      'educationExperiences' => function ($query) {
        $query->orderBy('start', 'desc');
      },
    ])->find(1);
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getEnglishInfo();
    $data = array_merge($info, $langInfo);
    $data['profile'] = $profile;
    return view('cv', $data);
  }
}
