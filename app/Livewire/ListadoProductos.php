<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\Attributes\On;

class ListadoProductos extends Component
{

    protected $listeners = ['eliminarProducto'];


    public function eliminarProducto($id)
    {
        $producto = Producto::find($id);
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
