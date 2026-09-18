<?php

namespace App\View\Components\Cv;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class SectionService extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Collection $services)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cv.section-service');
    }
}
