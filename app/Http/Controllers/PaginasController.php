<?php

namespace App\Http\Controllers;

use App\Models\Musico;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function musicos()
    {
        $musicos = Musico::all();
        return view('paginas.musicos', [
            'musicos' => $musicos
        ]);
    }
}
