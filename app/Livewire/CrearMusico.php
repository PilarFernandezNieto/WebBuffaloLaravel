<?php

namespace App\Livewire;

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
        'nombre' => 'required|string',
        'apellidos' => 'string',
        'origen' => 'string',
        'biografia' => 'required',
        'fecha_nac' => 'required',

    ];

    protected $listeners = ['crearMusico'];
    public function crearMusico()
    {
        $this->validate();

        $imagen = $this->imagen->store('public/imagenes');

    }

    public function render()
    {

        return view('livewire.crear-musico');
    }
}
