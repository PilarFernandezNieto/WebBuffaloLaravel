<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;


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
        'privacidad' => 'accepted'
    ];
    protected $messages = [
        'privacidad.accepted' => 'Debes aceptar la política de privacidad para enviar el mensaje'
    ];

    public function submit()
    {
        $this->validate();
        if (empty($this->recaptchaToken)) {
            session()->flash('error', 'Error de verificación. Por favor, inténtalo de nuevo');
        }

        //Verificar reCAPTCHA contra Google
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret_key'),
            'response' => $this->recaptchaToken,
        ]);
        // PARA PRUEBAS EN DESARROLLO
        // $response = Http::withoutVerifying()->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret'   => config('services.recaptcha.secret_key'),
        //     'response' => $this->recaptchaToken,
        // ]);
        $result = $response->json();

        //dd($result); // ← y aquí para ver la respuesta

        // Comprobar success (bool) Y score (float) por separado
        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            session()->flash('error', 'Verificación fallida. Por favor, inténtalo de nuevo.');
            return;
        }

        Mail::to('info@theelectricbuffalo.com')->send(new ContactForm($this->nombre, $this->email, $this->mensaje));

        session()->flash('success', '¡Tu mensaje ha sido enviado con éxito! Nos pondremos en contacto contigo pronto.');

        return redirect()->route('contacto');
    }
    public function render()
    {
        return view('livewire.contacto');
    }
}
