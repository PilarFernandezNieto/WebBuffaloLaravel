<?php

namespace App\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class ListadoNoticias extends Component
{
    public function render()
    {
        $noticias = Noticia::all();
        return view('livewire.listado-noticias', [
            'noticias' => $noticias
        ]);
    }
}
