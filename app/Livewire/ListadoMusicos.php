<?php

namespace App\Livewire;

use App\Models\Musico;
use Livewire\Component;

class ListadoMusicos extends Component
{
    public function render()
    {
        $musicos = Musico::all();
        return view('livewire.listado-musicos', [
            'musicos' => $musicos
        ]);
    }
}
