<?php

namespace App\Livewire;

use App\Models\Musico;
use App\Traits\ImageHandler;
use Livewire\Component;
use Livewire\Attributes\On;

class ListadoMusicos extends Component
{

    protected $listeners = ['eliminarMusico'];

    use ImageHandler;


    public function eliminarMusico($id)
    {
        $musico = Musico::find($id);
        $this->borraImagen($musico->imagen);
        $musico->delete();
    }


    public function render()
    {
        $musicos = Musico::all();


        return view('livewire.listado-musicos', [
            'musicos' => $musicos
        ]);
    }
}
