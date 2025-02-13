<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageHandler
{
    public function borraImagen($imagen)
    {
        if (!$imagen) {
            return;
        }

        $relativePath = 'imagenes/' . $imagen;

        if (Storage::disk('public')->exists($relativePath)) {
            Storage::disk('public')->delete($relativePath);
        }
    }
}
