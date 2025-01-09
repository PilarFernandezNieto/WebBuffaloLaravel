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
        $user->delete();
    }
    public function render()
    {
        $usuarios = User::all();

        return view('livewire.listado-usuarios', [
            'usuarios' => $usuarios
        ]);
    }
}
