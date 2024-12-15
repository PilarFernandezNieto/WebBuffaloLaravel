<?php

namespace App\Livewire;

use App\Models\Contenido;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarContenido extends Component
{

    public $id;
    public $titulo;
    public $texto;
    public $imagen;
    public $portada = false;
    public $fecha;
    public $imagen_nueva;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'texto' => 'required',
        'portada' => 'boolean',
        'fecha' => 'required|date',
        'imagen_nueva' => 'nullable|image|max:1024'  // nullable: el campo puede estar vacío pero en caso no de no estarlo, debe de ser una imagen

    ];


    public function mount(Contenido $contenido)
    {

        $this->id = $contenido->id;
        $this->titulo = $contenido->titulo;
        $this->texto = $contenido->texto;
        $this->imagen = $contenido->imagen;
        $this->portada = $contenido->portada;
        $this->fecha = $contenido->fecha;
    }

    public function editarContenido()
    {
        $datos = $this->validate();


        // Si hay nueva imagen
        if ($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('imagenes', 'public');

            $datos['imagen'] = str_replace('imagenes/', '', $imagen);
        }
        // Encontrar el contenido a editar
        $contenido = Contenido::find($this->id);

        // Asignar los valores
        $contenido->titulo = $datos['titulo'];
        $contenido->texto = $datos['texto'];
        $contenido->imagen = $datos['imagen'] ?? $contenido->imagen;
        $contenido->portada = $datos['portada'];
        $contenido->fecha = $datos['fecha'];

        // Guardar el registro
        $contenido->save();

        // Redireccionar
        session()->flash("mensaje", "Contenido actualizado correctamente");
        return redirect()->route("admin.contenidos.index");
    }

    public function render()
    {
        return view('livewire.editar-contenido');
    }
}
