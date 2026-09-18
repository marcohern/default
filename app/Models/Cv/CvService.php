<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Model;

class CvService extends Model
{
    //
    public function profile(): BelongsTo
    {
        return $this->belongsTo(CvProfile::class, 'profile_id');
    }
}
