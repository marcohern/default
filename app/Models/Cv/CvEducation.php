<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CvEducation extends Model
{
  protected $table = "cv_educations";
    //
    public function profile(): BelongsTo
    {
        return $this->belongsTo(CvProfile::class, 'profile_id');
    }
}
