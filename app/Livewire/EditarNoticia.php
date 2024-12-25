<?php

namespace App\Livewire;

use App\Models\Noticia;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditarNoticia extends Component
{

    public $id;
    public $titulo;
    public $intro;
    public $texto;
    public $portada = false;
    public $fecha;
    public $imagen;
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [

        "titulo" => "required|string||max:255",
        "intro" => "string||max:255",
        "texto" => "required|string",
        "fecha" => "required|date",
        'imagen_nueva' => 'nullable|image|mimes:jpeg,png,jpg|max:1024',
        'portada' => 'nullable|boolean',
    ];

    public function mount(Noticia $noticia)
    {
        $this->id = $noticia->id;
        $this->titulo = $noticia->titulo;
        $this->intro = $noticia->intro;
        $this->texto = $noticia->texto;
        $this->portada = $noticia->portada;
        $this->fecha = $noticia->fecha;
        $this->imagen = $noticia->imagen;
    }

    public function editarNoticia()
    {
        $datos = $this->validate();
        // Si hay nueva imagen
        if ($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('imagenes', 'public');

            $datos['imagen'] = str_replace('imagenes/', '', $imagen);
        }
        $noticia = Noticia::find($this->id);

        $noticia->titulo = $datos['titulo'];
        $noticia->intro = $datos['intro'];
        $noticia->texto = $datos['texto'];
        $noticia->portada = $datos['portada'];
        $noticia->fecha = $datos['fecha'];
        $noticia->imagen = $datos['imagen'] ?? $noticia->imagen;

        $noticia->save();
        // Redireccionar
        session()->flash("mensaje", "Noticia actualizada correctamente");
        return redirect()->route("admin.noticias.index");
    }

    public function render()
    {
        return view('livewire.editar-noticia');
    }
}
