<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $fillable = [
        'titulo',
        'texto',
        'fecha',
        'imagen'
    ];
}
