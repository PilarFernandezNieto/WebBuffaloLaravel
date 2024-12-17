<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Models\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contenido = Contenido::where('portada', 1)
            ->select('id','titulo', 'texto', 'imagen')
            ->first();


        return view('welcome', [
            'contenido' => $contenido,
        ] );
    }
}
