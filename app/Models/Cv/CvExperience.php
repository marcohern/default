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

    private function dateYear($dateField): Attribute
    {
      return Attribute::make(
         get: fn (mixed $value, array $attributes) => isset($attributes[$dateField])
                ? Carbon::parse($attributes[$dateField])->year
                : null,
      );
    }

    public function startYear(): Attribute
    {
      return $this->dateYear('start');
    }

    public function endYear(): Attribute
    {
      return $this->dateYear('end');
    }
}
