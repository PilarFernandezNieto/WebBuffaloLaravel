<?php

namespace App\Livewire;

use App\Models\Musico;
use Livewire\Component;
use Livewire\Attributes\On;

class ListadoMusicos extends Component
{

    protected $listeners = ['eliminarMusico'];


    public function eliminarMusico($id)
    {
        $musico = Musico::find($id);
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
