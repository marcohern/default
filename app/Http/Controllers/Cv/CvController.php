<?php

namespace App\Http\Controllers\Cv;

use App\Cv\CvData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CvController extends Controller
{
  public function __construct(private CvData $cvData)
  { }

  public function view()
  {
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getEnglishInfo();
    $data = array_merge($info, $langInfo);
    return view('cv', $data);
  }

  public function viewEs()
  {
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getSpanishInfo();
    $data = array_merge($info, $langInfo);
    return view('cv', $data);
  }

  public function viewEn()
  {
    $info = $this->cvData->getInfo();
    $langInfo = $this->cvData->getEnglishInfo();
    $data = array_merge($info, $langInfo);
    return view('cv', $data);
  }
}
