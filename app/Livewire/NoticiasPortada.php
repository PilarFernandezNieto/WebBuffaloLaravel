<?php

namespace App\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class NoticiasPortada extends Component
{
    public function render()
    {
        $noticias = Noticia::where('portada', 1)->orderBy('fecha', 'desc')->limit(3)->get();
        return view('livewire.noticias-portada', [
            'noticias' => $noticias
        ]);
    }
}
