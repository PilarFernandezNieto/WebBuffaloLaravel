<?php

namespace App\Models;

use Carbon\Carbon;
use NumberFormatter;
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
        'talla_id',
        'color',
        'sello'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function formato(){
        return $this->belongsTo(Formato::class);
    }
    public function talla(){
        return $this->belongsTo(Talla::class);
    }

    public function getPrecioFormateadoAttribute()
    {
        $formatter = new NumberFormatter('es_ES', NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($this->precio, 'EUR');
    }


}
