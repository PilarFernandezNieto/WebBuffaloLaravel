<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ListadoCamisetas extends Component
{

    protected $listeners = ['eliminarCamiseta'];


    public function eliminarCamiseta($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
    }


    public function render()
    {
        $camisetas = Producto::where('categoria_id', 2)->get();
        return view('livewire.listado-camisetas', compact('camisetas'));
    }
}
