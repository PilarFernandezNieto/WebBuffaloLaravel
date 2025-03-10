<?php

namespace App\Livewire;

use App\Models\Noticia;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearNoticia extends Component
{
    public $titulo;
    public $intro;
    public $texto;
    public $fecha;
    public $imagen;
    public $portada = false;

    use WithFileUploads;

    protected $rules = [
        "titulo" => "required|string||max:255",
        "intro" => "string||max:255",
        "texto" => "required|string",
        "fecha" => "required|date",
        'imagen' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        'portada' => 'nullable|boolean',
    ];


    public function crearNoticia(){
        $datos = $this->validate();


        $imagen = $this->imagen->store('imagenes', 'public');
        $datos['imagen'] = str_replace('imagenes/', '', $imagen);

        Noticia::create([
            "titulo" => $datos["titulo"],
            "intro" => $datos["intro"],
            "texto" => $datos["texto"],
            "fecha" => $datos["fecha"],
            "imagen" => $datos["imagen"],
            "portada" => $datos["portada"]
        ]);

        session()->flash('mensaje', 'Noticia creada correctamente');
        return redirect()->route('admin.noticias.index');
    }

    public function render()
    {
        return view('livewire.crear-noticia');
    }
}
