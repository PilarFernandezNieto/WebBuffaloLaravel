<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;

class EditarUsuario extends Component
{

    public $id;
    public $name;
    public $email;
    public $password;
    public $admin = 0;
    public $verified = 0;

    protected function rules()
    {
        return  [
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->id)],
            'password' => 'required|min:8',
            'admin' => 'nullable|boolean',
            'verified' => 'nullable|boolean'
        ];
    }

    public function mount(User $usuario)
    {

        $this->id = $usuario->id;
        $this->name = $usuario->name;
        $this->email = $usuario->email;
        $this->password = $usuario->password;
        $this->admin = $usuario->admin;
        $this->verified = $usuario->email_verified_at !== null ? 1: 0;
    }

    public function editarUsuario()
    {
        $datos = $this->validate();

        $usuario = User::find($this->id);


        $usuario->name = $datos['name'];
        $usuario->email = $datos['email'];
        if(!empty($datos['password'])){
            $usuario->password = bcrypt($datos['password']);
        }

        $usuario->admin = $datos['admin'];
        $usuario->email_verified_at =  $datos['verified'] ?  ($usuario->email_verified_at ?? Carbon::now()) : null;

        $usuario->save();

        session()->flash('mensaje', 'Usuario modificado correctamente');

        return redirect()->route('admin.usuarios.index');
    }

    public function render()
    {
        return view('livewire.editar-usuario');
    }
}
