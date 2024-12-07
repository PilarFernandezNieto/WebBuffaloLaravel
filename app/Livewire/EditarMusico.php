<?php

namespace App\Livewire;

use App\Models\Musico;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarMusico extends Component
{
    public $id;
    public $nombre;
    public $apellidos;
    public $alias;
    public $origen;
    public $biografia;
    public $fecha_nac;
    public $imagen;
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'apellidos' => 'string',
        'alias' => 'required',
        'origen' => 'string',
        'biografia' => 'required',
        'fecha_nac' => 'required',
        'imagen_nueva' => 'nullable|image|max:1024'  // nullable: el campo puede estar vacío pero en caso no de no estarlo, debe de ser una imagen
    ];

    public function mount(Musico $musico)
    {
        $this->id = $musico->id;
        $this->nombre =  $musico->nombre;
        $this->apellidos =  $musico->apellidos;
        $this->alias =  $musico->alias;
        $this->origen =  $musico->origen;
        $this->biografia =  $musico->biografia;
        $this->fecha_nac =  $musico->fecha_nac;
        $this->imagen = $musico->imagen;

        // OTRA OPCIÓN
        // foreach ($musico->getAttributes() as $key => $value) {
        //     if (property_exists($this, $key)) {
        //         $this->$key = $value;
        //     }
        // }
    }

    public function editarMusico()
    {
        $datos = $this->validate();

        // Si hay nueva imagen
        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('imagenes', 'public');

            $datos['imagen'] = str_replace('imagenes/', '', $imagen);
        }

        // Encontrar el musico a editar
        $musico = Musico::find($this->id);

        // Asignar los valores
        $musico->nombre = $datos["nombre"];
        $musico->apellidos = $datos["apellidos"];
        $musico->alias = $datos["alias"];
        $musico->origen = $datos["origen"];
        $musico->biografia = $datos["biografia"];
        $musico->fecha_nac = $datos["fecha_nac"];
        $musico->imagen = $datos['imagen'] ?? $musico->imagen;



         // Guardar el músico
        $musico->save();

        // Redireccionar
        session()->flash("mensaje", "Músico actualizado correctamente");
        return redirect()->route("admin.musicos.index");
    }

    public function render()
    {

        return view('livewire.editar-musico');
    }
}
