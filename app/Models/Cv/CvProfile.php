<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

class CvProfile extends Model
{
    protected $casts = [
      'birth' => 'date'
    ];
    
    public function jobTitles(): HasMany
    {
        return $this->hasMany(CvJobTitle::class, 'profile_id','id');
    }
    
    public function workExperiences(): HasMany
    {
        return $this->hasMany(CvExperience::class, 'profile_id','id');
    }
    
    public function educationExperiences(): HasMany
    {
      return $this->hasMany(CvEducation::class, 'profile_id','id');
    }
    
    public function articles(): HasMany
    {
      return $this->hasMany(CvArticles::class, 'profile_id','id');
    }
    
    public function aboutArticles(): HasMany
    {
      return $this->articles()->withAttributes(['category' => 'about']);
    }
    
    public function services(): HasMany
    {
      return $this->hasMany(CvService::class, 'profile_id','id');
    }

    protected function age(): Attribute
    {
      return Attribute::get(fn () => $this->birth?->age);
    }
}
