<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageHandler
{
    public function borraImagen(?string $path): void
    {
        if (!$path) {
            return;
        }

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
