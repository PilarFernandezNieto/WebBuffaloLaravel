<?php

namespace App\Livewire;

use App\Models\Musico;
use Livewire\Component;

class MostrarMusicos extends Component
{
    public function render()
    {
        $musicos = Musico::all();
        return view('livewire.mostrar-musicos', [
            'musicos' => $musicos
        ]);
    }
}
