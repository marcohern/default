<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Model;

class CvLanguage extends Model
{
    //
    public function profile(): BelongsTo
    {
        return $this->belongsTo(CvProfile::class, 'profile_id');
    }
}
