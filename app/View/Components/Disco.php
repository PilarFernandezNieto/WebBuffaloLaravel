<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Disco extends Component
{

    public $disco;
    /**
     * Create a new component instance.
     */
    public function __construct($disco)
    {
        $this->disco = $disco;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.disco');
    }
}
