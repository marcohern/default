<?php

namespace App\View\Components\Cv;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class SectionEducation extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Collection $education)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cv.section-education');
    }
}
