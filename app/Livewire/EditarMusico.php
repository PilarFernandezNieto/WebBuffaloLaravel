<?php

namespace App\Livewire;

use App\Models\Musico;
use App\Traits\ImageHandler;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
    public $fotografo;
    public $imagen_nueva;

    use WithFileUploads;
    use ImageHandler;

    protected function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'nullable|string|max:255',
            'alias' => [
                'required',
                'string',
                'max:255',
                Rule::unique('musicos')->ignore($this->id), // Ignora el alias del músico actual
            ],
            'origen' => 'nullable|string|max:255',
            'biografia' => 'required|string',
            'fecha_nac' => 'required|date|before:today',
            'fotografo' => 'nullable|string|max:255',
            'imagen_nueva' => 'nullable|image||mimes:jpeg,png,jpg|max:1024',  // Nullable: puede estar vacío, pero si no lo está, debe ser una imagen.
        ];
    }
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
        $this->fotografo = $musico->fotografo;

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
        if ($this->imagen_nueva) {
            $this->borraImagen($this->imagen);
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
        $musico->fotografo = $datos["fotografo"];

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
