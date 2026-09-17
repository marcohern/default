<?php

namespace App\View\Components\Cv;

use App\Models\Cv\CvProfile;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
  /**
   * Create a new component instance.
   */
  public function __construct(public CvProfile $profile)
  {
    
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
      return view('components.cv.logo');
  }
}
