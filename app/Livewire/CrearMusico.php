<?php

namespace App\Livewire;

use App\Models\Musico;
use App\Services\ImageService;
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
    public $fotografo;

    use WithFileUploads;


    protected $rules = [
        'nombre' => 'required|string|max:255',
        'apellidos' => 'string|nullable|max:255',
        'alias' => 'required|string|max:255|unique:musicos,alias',
        'origen' => 'string|nullable|max:255',
        'biografia' => 'required|string',
        'fecha_nac' => 'required|date|before:today',
        'imagen'    => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'fotografo' => 'string|nullable|max:255'
    ];

    public function crearMusico()
    {
        $datos = $this->validate();

        $datos['imagen'] = ImageService::save($this->imagen, 'musicos');

        Musico::create([
            'nombre' => $datos['nombre'],
            'apellidos' => $datos['apellidos'],
            'alias' => $datos['alias'],
            'origen' => $datos['origen'],
            'fecha_nac' => $datos['fecha_nac'],
            'biografia' => $datos['biografia'],
            'imagen' => $datos['imagen'],
            'fotografo' => $datos['fotografo']
        ]);

        session()->flash('mensaje', 'Músico creado correctamente');

        return redirect()->route('admin.musicos.index');
    }

    public function render()
    {

        return view('livewire.crear-musico');
    }
}
