<?php

namespace App\Livewire;

use App\Models\Contenido;
use App\Services\ImageService;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearContenido extends Component
{

    public $titulo;
    public $texto;
    public $imagen;
    public $portada = true;
    public $fecha;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'texto' => 'required',
        'imagen'    => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'portada' => 'nullable|boolean',
        'fecha' => 'required|date'

    ];

    public function crearContenido()
    {
        $datos = $this->validate();
        $datos['imagen'] = ImageService::save($this->imagen, 'contenidos');

        Contenido::create([
            'titulo' => $datos['titulo'],
            'texto' => $datos['texto'],
            'fecha' => $datos['fecha'],
            'imagen' => $datos['imagen'],
            'portada' => $datos['portada']

        ]);

        session()->flash('mensaje', 'Contenido creado correctamente');

        return redirect()->route('admin.contenidos.index');
    }

    public function render()
    {


        return view('livewire.crear-contenido');
    }
}
