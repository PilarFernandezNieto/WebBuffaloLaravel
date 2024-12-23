<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CamisetaTienda extends Component
{
    public $camiseta;
    public function __construct($camiseta)
    {
        $this->camiseta = $camiseta;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.camiseta-tienda');
    }
}
