<?php

namespace App\Livewire;

use App\Models\Contenido;
use Livewire\Component;

class ListadoContenidos extends Component
{

    public function render()
    {
        $contenidos = Contenido::all();

        return view('livewire.listado-contenidos', [
            'contenidos' => $contenidos
        ]);
    }
}
