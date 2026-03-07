<?php

namespace App\Services;

use Spatie\Image\Image;
use Spatie\Image\Enums\ImageDriver;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ImageService
{
    /**
     * Dimensiones máximas por carpeta/modelo.
     * Spatie redimensiona respetando el ratio original (no distorsiona).
     */
    private static array $dimensions = [
        'musicos'   => ['width' => 900,  'height' => 600],  // 3:2
        'noticias'  => ['width' => 600,  'height' => 600],  // 1:1
        'discos'    => ['width' => 800,  'height' => 0],    // altura automática
        'camisetas' => ['width' => 600,  'height' => 600],  // 1:1
    ];

    /**
     * Convierte, redimensiona y guarda la imagen subida.
     *
     * @param  UploadedFile  $file      El archivo de Livewire ($this->imagen)
     * @param  string        $folder    Carpeta destino ('musicos', 'discos'...)
     * @return string                   Path relativo listo para guardar en BBDD
     */
    public static function save(UploadedFile $file, string $folder): string
    {
        $dimensions  = self::$dimensions[$folder] ?? ['width' => 900, 'height' => 600];
        $filename    = Str::uuid() . '.webp';
        $storagePath = storage_path("app/public/{$folder}/{$filename}");

        // Aseguramos que existe la carpeta destino
        if (!file_exists(dirname($storagePath))) {
            mkdir(dirname($storagePath), 0755, true);
        }

        Image::useImageDriver(ImageDriver::Gd)
            ->loadFile($file->getRealPath())
            ->width($dimensions['width'])
            ->height($dimensions['height'])
            ->quality(85)
            ->save($storagePath);

        return "{$folder}/{$filename}";
    }
}
