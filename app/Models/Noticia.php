<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Noticia extends Model
{
    protected $fillable = [
        'titulo',
        'slug',
        'intro',
        'texto',
        'fecha',
        'imagen',
        'portada',
    ];

    public function getFechaFormateadaAttribute()
    {
        return Carbon::parse($this->fecha)->format('d-m-Y');
    }

    protected static function booted(): void
    {
        static::creating(function (Noticia $noticia) {
            if (empty($noticia->slug) && ! empty($noticia->titulo)) {
                $noticia->slug = Str::slug($noticia->titulo);
            }
        });

        static::updating(function (Noticia $noticia) {
            if ($noticia->isDirty('titulo') || empty($noticia->slug)) {
                if (! empty($noticia->titulo)) {
                    $noticia->slug = Str::slug($noticia->titulo);
                }
            }
        });
    }
}
