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
        'workExperiences'      => fn ($query) => $query->orderBy('start', 'desc'),
        'educationExperiences' => fn ($query) => $query->orderBy('start', 'desc'),
        'articles'             => fn ($query) => $query->where(['locale' => $locale])->orderBy('ord', 'asc'),
        'services'             => fn ($query) => $query->orderBy('ord', 'asc'),
        'languages'            => fn ($query) => $query->orderBy('ord', 'asc'),
        'codingSkills'         => fn ($query) => $query->orderBy('ord', 'asc'),
        'clients'              => fn ($query) => $query->orderBy('ord', 'asc')
      ])->find($profileId);
  }
}
