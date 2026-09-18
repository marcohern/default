<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class CvExperience extends Model
{
    protected $casts = [
        'start' => 'date',
        'end' => 'date',
    ];
    
    //
    public function profile(): BelongsTo
    {
        return $this->belongsTo(CvProfile::class, 'profile_id');
    }

    public function startYear(): Attribute
    {
      return Attribute::get(fn () => $this->start?->year);
    }

    public function endYear(): Attribute
    {
      return Attribute::get(fn () => $this->end?->year);
    }
}
