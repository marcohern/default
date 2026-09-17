<?php

namespace App\Daos\Cv;

use App\Models\Cv\CvProfile;

class CvProfileDao
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function find($profileId, $locale='en'): CvProfile | null {
      return CvProfile::with([
        'jobTitles',
        'workExperiences' => function ($query) {
          $query->orderBy('start', 'desc');
        },
        'educationExperiences' => function ($query) {
          $query->orderBy('start', 'desc');
        },
        'aboutArticles'=> function($query) use($locale) {
          $query->where(['locale' => $locale])->orderBy('ord', 'asc');
        }
      ])->find($profileId);
    }
}
