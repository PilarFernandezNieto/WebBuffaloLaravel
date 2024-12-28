<?php

namespace App\Http\Controllers;

use App\Models\Musico;
use App\Models\Noticia;
use App\Models\Producto;
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

        $noticias = Noticia::paginate(3);

        return view('paginas.noticias', [
            'noticias' => $noticias
        ]);
    }

    public function mostrarNoticia(Noticia $noticia){
        return view('paginas.noticia', compact('noticia'));
    }

    public function discos(){

        $discos =Producto::where('categoria_id', 1)->orderBy('anio_edicion', 'desc')->get();

        return view('paginas.discos', compact('discos'));
    }

    public function mostrarDisco(Producto $disco){
        return view('paginas.disco', compact('disco'));
    }
    public function tienda(){

        $discos = Producto::where('categoria_id', 1)->get();
        $camisetas = Producto::where('categoria_id', 2)->get();
        return view('paginas.tienda', [
            'discos' => $discos,
            'camisetas' => $camisetas
        ]);
    }

    public function contacto(){
        return view('paginas.contacto');
    }
}
