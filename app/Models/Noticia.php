<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'titulo',
        'intro',
        'texto',
        'fecha',
        'imagen',
        'portada'
    ];

    public function getFechaFormateadaAttribute(){
        return Carbon::parse($this->fecha)->format('d-m-Y');
    }

}
