<?php

namespace App\Http\Controllers;

use App\Models\Musico;
use App\Models\Noticia;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function historia()
    {
        $musicos = Musico::all();
        return view('paginas.historia', [
            'musicos' => $musicos
        ]);
        return view('paginas.historia', compact('musicos'));
    }

    public function noticias(){

        $noticias = Noticia::all();

        return view('paginas.noticias', compact('noticias'));
    }

    public function mostrarNoticia(Noticia $noticia){
        return view('paginas.noticia', compact('noticia'));
    }
}
