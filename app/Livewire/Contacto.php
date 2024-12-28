<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class Contacto extends Component
{
    public $nombre;
    public $email;
    public $mensaje;
    public $privacidad = false;
    public $recaptchaToken;

    protected $rules = [
        'nombre' => 'required|string',
        'email' => 'required|email',
        'mensaje' => 'required|string',


    ];

    public function submit()
    {
        $datos = $this->validate();

        $this->nombre = $datos['nombre'];
        $this->email = $datos['email'];
        $this->mensaje = $datos['mensaje'];

        $secretKey = config('services.recaptcha.secret_key');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$this->recaptchaToken}");
        $result = json_decode($response, true);

        // Enviar correo al administrador
        if ($this->privacidad == false) {
            session()->flash('error', 'Debes aceptar la política de privacidad para enviar el mensaje.');
            return;
        }
        if ($result['success'] >= 0.5) {
            Mail::send([], [], function ($mail) {
                $mail->to('info@theelectricbuffalo.com') // Cambia esto por el correo del administrador
                    ->from($this->email, $this->nombre)
                    ->subject('Nuevo Mensaje de Contacto')
                    ->html("
                    <p><strong>Nombre:</strong> {$this->nombre}</p>
                    <p><strong>Email:</strong> {$this->email}</p>
                    <p><strong>Mensaje:</strong></p>
                    <p>{$this->mensaje}</p>
                ");
            });
            // Limpiar campos y mostrar mensaje de éxito
            $this->reset();
            session()->flash('success', '¡Tu mensaje ha sido enviado con éxito! Nos pondremos en contacto contigo pronto.');
        }

    }
    public function render()
    {
        return view('livewire.contacto');
    }
}
