<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CvJobTitle extends Model
{
    //
    public function user(): BelongsTo
{
    return $this->belongsTo(CvProfile::class, 'profile_id');
}
}
