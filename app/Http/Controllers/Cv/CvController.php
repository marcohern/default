<?php

namespace App\Http\Controllers\Cv;

use App\Cv\CvData;
use App\Daos\Cv\CvProfileDao;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CvController extends Controller
{
  public function __construct(
    private CvData $cvData,
    private CvProfileDao $dao)
  { }

  public function view()
  {
    App::setLocale('en');
    $profile = $this->dao->find(1, 'en');
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getEnglishInfo();
    $data = array_merge($info, $langInfo);
    $data['profile'] = $profile;
    return view('cv', $data);
  }

  public function viewEs()
  {
    App::setLocale('es');
    $profile = $this->dao->find(1, 'es');
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getSpanishInfo();
    $data = array_merge($info, $langInfo);
    $data['profile'] = $profile;
    return view('cv', $data);
  }

  public function viewEn()
  {
    App::setLocale('en');
    $profile = $this->dao->find(1, 'en');
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getEnglishInfo();
    $data = array_merge($info, $langInfo);
    $data['profile'] = $profile;
    return view('cv', $data);
  }
}
