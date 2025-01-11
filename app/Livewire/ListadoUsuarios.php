<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListadoUsuarios extends Component
{

    protected $listeners = ['eliminarUsuario'];


    public function eliminarUsuario($id)
    {

        $user = User::find($id);
        if ($user->admin) {
            $this->dispatch('resultadoEliminacion', ['success' => false, 'message' => 'No se puede eliminar un administrador.']);
            return;
        }
        $user->delete();
        $this->dispatch('resultadoEliminacion', ['success' => true, 'message' => 'Usuario eliminado correctamente.']);

    }
    public function render()
    {
        $usuarios = User::all();

        return view('livewire.listado-usuarios', [
            'usuarios' => $usuarios
        ]);
    }
}
