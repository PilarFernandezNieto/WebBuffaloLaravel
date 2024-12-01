<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Musico extends Component
{
     public $musico;
    /**
     * Create a new component instance.
     */
    public function __construct($musico)
    {
        $this->musico = $musico;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.musico');
    }
}
