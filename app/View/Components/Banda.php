<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banda extends Component
{

    public $musicos;
    /**
     *
     * Create a new component instance.
     */
    public function __construct($musicos)
    {
        $this->musicos = $musicos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banda');
    }
}
