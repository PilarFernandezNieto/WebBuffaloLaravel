<?php

namespace App\Livewire;

use App\Models\Contenido;
use App\Services\ImageService;
use App\Traits\ImageHandler;
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
    use ImageHandler;

    protected $rules = [
        'titulo' => 'required|string',
        'texto' => 'required',
        'portada' => 'boolean',
        'fecha' => 'required|date',
        'imagen_nueva' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

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
            $this->borraImagen($this->imagen);
            $datos['imagen'] = ImageService::save($this->imagen_nueva, 'contenidos');
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
