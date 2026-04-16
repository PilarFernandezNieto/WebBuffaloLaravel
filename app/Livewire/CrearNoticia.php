<?php

namespace App\Livewire;

use App\Models\Noticia;
use App\Services\ImageService;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mews\Purifier\Facades\Purifier;


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
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'portada' => 'nullable|boolean',
    ];


    public function crearNoticia()
    {
        $datos = $this->validate();

        $datos['imagen'] = ImageService::save($this->imagen, 'noticias');

        Noticia::create([
            "titulo" => $datos["titulo"],
            "intro" => $datos["intro"],
            "texto" => Purifier::clean($datos["texto"]),
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
