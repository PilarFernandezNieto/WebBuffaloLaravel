<?php

namespace App\Livewire;

use App\Models\Formato;
use Livewire\Component;
use App\Models\Producto;
use App\Models\Categoria;
use Livewire\WithFileUploads;

class EditarProducto extends Component
{
    public $id;
    public $nombre;
    public $imagen;
    public $imagen_nueva;
    public $informacion;
    public $textos;
    public $categoria;
    public $formato;
    public $precio;
    public $stock;
    public $talla;
    public $color;
    public $sello;
    public $anio_edicion;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'imagen_nueva' => 'nullable|image|max:1024',
        'informacion' => 'nullable|string',
        'textos' => 'nullable|string',
        'categoria' => 'required|integer',
        'formato' => 'nullable|integer',
        'precio' => 'required|numeric',
        'stock' => 'nullable|integer',
        'talla' => 'nullable|string',
        'color' => 'nullable|string',
        'sello' => 'nullable|string',
        'anio_edicion' => 'nullable|string'
    ];

    public function mount(Producto $producto)
    {
        $this->id = $producto->id;
        $this->nombre = $producto->nombre;
        $this->imagen = $producto->imagen;
        $this->informacion = $producto->informacion;
        $this->textos = $producto->textos;
        $this->categoria = $producto->categoria_id;
        $this->formato = $producto->formato_id;
        $this->precio = $producto->precio;
        $this->stock = $producto->stock;
        $this->talla = $producto->talla;
        $this->color = $producto->color;
        $this->sello = $producto->sello;
        $this->anio_edicion = $producto->anio_edicion;
    }

    public function editarProducto()
    {
        $datos = $this->validate();

        // Si hay nueva imagen
        if ($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('imagenes', 'public');

            $datos['imagen'] = str_replace('imagenes/', '', $imagen);
        }

        // Encontrar el producto a editar
        $producto = Producto::find($this->id);

        // Asignar los valores
        $producto->nombre = $datos["nombre"];
        $producto->imagen = $datos['imagen'] ?? $producto->imagen;
        $producto->informacion = $datos["informacion"];
        $producto->textos = $datos["textos"];
        $producto->categoria_id = $datos["categoria"];
        $producto->formato_id = $datos["formato"];
        $producto->precio = $datos["precio"];
        $producto->stock = $datos["stock"];
        $producto->talla = $datos["talla"];
        $producto->color = $datos["color"];
        $producto->sello = $datos["sello"];
        $producto->anio_edicion = $datos["anio_edicion"];

        $producto->save();

        // Redireccionar
        session()->flash("mensaje", "Producto actualizado correctamente");
        return redirect()->route("admin.productos.index", []);
    }




    public function render()
    {

        $categorias = Categoria::all();
        $formatos = Formato::all();
        return view('livewire.editar-producto', [
            'categorias' => $categorias,
            'formatos' => $formatos
        ]);
    }
}
