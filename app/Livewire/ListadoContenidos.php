<?php

namespace App\Livewire;

use App\Models\Contenido;
use App\Traits\ImageHandler;
use Livewire\Component;

class ListadoContenidos extends Component
{

    use ImageHandler;
    protected $listeners = ['eliminarContenido'];


    public function eliminarContenido($id)
    {
        $contenido = Contenido::find($id);
        $this->borraImagen($contenido->imagen);
        $contenido->delete();
        $this->dispatch('resultadoEliminacion', ['success' => true, 'message' => 'El contenido se ha eliminado correctamente.']);
    }

    public function render()
    {
        $contenidos = Contenido::all();

        return view('livewire.listado-contenidos', [
            'contenidos' => $contenidos
        ]);
    }
}
