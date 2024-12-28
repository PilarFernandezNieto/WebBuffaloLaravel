<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Musico extends Model
{
    protected $fillable = [
        'nombre',
        'apellidos',
        'alias',
        'origen',
        'fecha_nac',
        'biografia',
        'imagen',
        'fotografo'
    ];
}
