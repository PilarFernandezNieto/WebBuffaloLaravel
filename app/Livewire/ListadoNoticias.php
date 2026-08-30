<?php

namespace App\Livewire;

use App\Models\Noticia;
use App\Traits\ImageHandler;
use Livewire\Component;

class ListadoNoticias extends Component
{

    use ImageHandler;

    protected $listeners = ['eliminarNoticia'];

    public function eliminarNoticia($id)
    {
        $noticia = Noticia::find($id);
        $this->borraImagen($noticia->imagen);
        $noticia->delete();
        $this->dispatch('resultadoEliminacion', ['success' => true, 'message' => 'La noticia se ha eliminado correctamente.']);
    }

    public function render()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->get();

        return view('livewire.listado-noticias', [
            'noticias' => $noticias
        ]);
    }
}
