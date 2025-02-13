<?php

namespace App\Livewire;

use App\Models\Producto;
use App\Traits\ImageHandler;
use Livewire\Component;
use Livewire\Attributes\On;

class ListadoProductos extends Component
{

    use ImageHandler;

    protected $listeners = ['eliminarProducto'];

    public function eliminarProducto($id)
    {
        $producto = Producto::find($id);
        $this->borraImagen($producto->imagen);
        $producto->delete();
    }


    public function render()
    {
        $productos = Producto::all();

        return view('livewire.listado-productos', [
            'productos' => $productos
        ]);
    }
}
