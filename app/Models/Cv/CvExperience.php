<?php

namespace App\Models\Cv;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class CvExperience extends Model
{
    //
    public function profile(): BelongsTo
    {
        return $this->belongsTo(CvProfile::class, 'profile_id');
    }

    public function startYear(): Attribute
    {
      return Attribute::make(
         get: fn (mixed $value, array $attributes) => isset($attributes['start'])
                ? Carbon::parse($attributes['start'])->year
                : null,
      );
    }

    public function endYear(): Attribute
    {
      return Attribute::make(
         get: fn (mixed $value, array $attributes) => isset($attributes['end'])
                ? Carbon::parse($attributes['end'])->year
                : null,
      );
    }
}
