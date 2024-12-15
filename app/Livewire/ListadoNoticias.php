<?php

namespace App\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class ListadoNoticias extends Component
{

    protected $listeners = ['eliminarNoticia'];


    public function eliminarNoticia($id)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();
    }
    public function render()
    {
        $noticias = Noticia::all();
        return view('livewire.listado-noticias', [
            'noticias' => $noticias
        ]);
    }
}
