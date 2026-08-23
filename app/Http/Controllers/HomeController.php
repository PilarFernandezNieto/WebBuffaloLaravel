<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Models\Noticia;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contenido = Contenido::where('portada', 1)
            ->select('id','titulo', 'texto', 'imagen')
            ->first();

        $discos = Producto::where('categoria_id', 1)
            ->orderBy('anio_edicion', 'desc')
            ->limit(3)
            ->get();

        return view('welcome', [
            'contenido' => $contenido,
            'discos' => $discos,
        ] );
    }
}
