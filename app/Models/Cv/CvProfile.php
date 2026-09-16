<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CvProfile extends Model
{
    //
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
        return $this->hasMany(CvEducations::class, 'profile_id','id');
    }
}
