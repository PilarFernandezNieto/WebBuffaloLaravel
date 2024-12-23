<?php

namespace App\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ListadoDiscos extends Component
{

    protected $listeners = ['eliminarDisco'];


    public function eliminarDisco($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
    }


    public function render()
    {
        $discos = Producto::where('categoria_id', 1)->get();
        return view('livewire.listado-discos', compact('discos'));
    }
}
