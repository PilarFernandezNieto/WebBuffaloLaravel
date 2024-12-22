<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Formato;
use Livewire\Component;
use App\Models\Producto;
use Livewire\WithFileUploads;

class CrearProducto extends Component
{

    public $nombre;
    public $imagen;
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
        'imagen' => 'required|image|max:1024',
        'informacion' => 'nullable|string',
        'textos' => 'nullable|string',
        'categoria' => 'required|string',
        'formato' => 'nullable|string',
        'precio' => 'required|numeric',
        'stock' => 'nullable|integer',
        'talla' => 'nullable|string',
        'color' => 'nullable|string',
        'sello' => 'nullable|string',
        'anio_edicion' => 'nullable|string'
    ];

    function crearProducto() {
        $datos = $this->validate();
        $imagen = $this->imagen->store('imagenes', 'public');
        $datos['imagen'] = str_replace('imagenes/', '', $imagen);

        $datos['informacion'] = $datos['informacion'] ?? '';
        $datos['textos'] = $datos['textos'] ?? '';
        $datos['formato'] = $datos['formato'] ?? '';
        $datos['stock'] = $datos['stock'] ?? 0;
        $datos['talla'] = $datos['talla'] ?? '';
        $datos['color'] = $datos['color'] ?? '';
        $datos['sello'] = $datos['sello'] ?? '';
        $datos['anio_edicion'] = $datos['anio_edicion'] ?? '';


        Producto::create([
            'nombre' => $datos['nombre'],
            'imagen' => $datos['imagen'],
            'informacion' => $datos['informacion'],
            'textos' => $datos['textos'],
            'categoria_id' => $datos['categoria'],
            'formato_id' => $datos['formato'],
            'precio' => $datos['precio'],
            'stock' => $datos['stock'],
            'talla' => $datos['talla'],
            'color' => $datos['color'],
            'sello' => $datos['sello'],
            'anio_edicion' => $datos['anio_edicion']

        ]);

        session()->flash('mensaje', 'Producto creado correctamente');

        return redirect()->route('admin.productos.index');
    }

    public function render()
    {
        $categorias = Categoria::all();
        $formatos = Formato::all();
        return view('livewire.crear-producto', [
            'categorias' => $categorias,
            'formatos' => $formatos
        ]);
    }
}
