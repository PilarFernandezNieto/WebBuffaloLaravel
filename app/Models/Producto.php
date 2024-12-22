<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'anio_edicion',
        'imagen',
        'informacion',
        'textos',
        'categoria_id',
        'formato_id',
        'precio',
        'stock',
        'talla',
        'color',
        'sello'
    ];
}
