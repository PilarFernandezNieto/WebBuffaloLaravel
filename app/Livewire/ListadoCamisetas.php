<?php

namespace App\Livewire;

use App\Models\Producto;
use App\Traits\ImageHandler;
use Livewire\Component;

class ListadoCamisetas extends Component
{
    use ImageHandler;

    protected $listeners = ['eliminarCamiseta'];


    public function eliminarCamiseta($id)
    {
        $producto = Producto::find($id);
        $this->borraImagen($producto->imagen);
        $producto->delete();
    }


    public function render()
    {
        $camisetas = Producto::where('categoria_id', 2)->get();
        return view('livewire.listado-camisetas', compact('camisetas'));
    }
}
