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
        $this->dispatch('resultadoEliminacion', ['success' => true, 'message' => 'El disco se ha eliminado correctamente.']);
    }
    public function render()
    {
        $discos = Producto::where('categoria_id', 1)->orderBy('anio_edicion', 'desc')->get();
        return view('livewire.listado-discos', compact('discos'));
    }
}
