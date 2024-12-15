<?php

namespace App\Livewire;

use App\Models\Musico;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearMusico extends Component
{

    public $nombre;
    public $apellidos;
    public $alias;
    public $origen;
    public $biografia;
    public $fecha_nac;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        "titulo" => "required|string",
        "intro" => "string",
        "texto" => "required",
        "fecha" => "required",
        'imagen' => 'required|image|max:1024'

    ];

    public function crearMusico()
    {
        $datos = $this->validate();
        $imagen = $this->imagen->store('imagenes', 'public');
        $datos['imagen'] = str_replace('imagenes/', '', $imagen);

        Musico::create([
            'nombre' => $datos['nombre'],
            'apellidos' => $datos['apellidos'],
            'alias' => $datos['alias'],
            'origen' => $datos['origen'],
            'fecha_nac' => $datos['fecha_nac'],
            'biografia' => $datos['biografia'],
            'imagen' => $datos['imagen']
        ]);

        session()->flash('mensaje', 'Músico creado correctamente');

        return redirect()->route('admin.musicos.index');
    }

    public function render()
    {

        return view('livewire.crear-musico');
    }
}
