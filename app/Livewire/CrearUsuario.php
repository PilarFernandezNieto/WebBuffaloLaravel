<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;

class CrearUsuario extends Component
{

    public $name;
    public $email;
    public $password;
    public $admin = 0;
    public $verified = 0;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'admin' => 'nullable|boolean',
        'verified' => 'nullable|boolean'
    ];

    public function crearUsuario(){
        $datos = $this->validate();

        User::create([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'password' => bcrypt($datos['password']),
            'admin' => $datos['admin'],
            'email_verified_at' => $datos['verified'] ? Carbon::now() : null
        ]);

        session()->flash('mensaje', 'Usuario creado correctamente');

        return redirect()->route('admin.usuarios.index');
    }

    public function render()
    {


        return view('livewire.crear-usuario');
    }
}
