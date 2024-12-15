<?php

namespace App\Livewire;

use App\Models\Contenido;
use Livewire\Component;

class ListadoContenidos extends Component
{

    protected $listeners = ['eliminarContenido'];


    public function eliminarContenido($id)
    {
        $contenido = Contenido::find($id);
        $contenido->delete();
    }

    public function render()
    {
        $contenidos = Contenido::all();

        return view('livewire.listado-contenidos', [
            'contenidos' => $contenidos
        ]);
    }
}
