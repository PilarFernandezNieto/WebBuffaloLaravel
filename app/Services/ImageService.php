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
        'contenidos' => ['width' => 1200, 'height' => 0],  // altura automática

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

        $image = Image::useImageDriver(ImageDriver::Gd)
            ->loadFile($file->getRealPath());

        // Obtenemos el ancho original para no ampliar imágenes pequeñas
        $originalWidth = $image->getWidth();

        // Usamos el menor entre máximo definido y el ancho original para evitar ampliar imágenes pequeñas
        $targetWidth = min($dimensions['width'], $originalWidth);
        $image->quality(85)
            ->width($targetWidth);

        if ($dimensions['height'] > 0) {
            // sólo aplicamos height si está definido - height=0 significa altura automática
            $image->height($dimensions['height']);
        }
        $image->save($storagePath);

        return "{$folder}/{$filename}";
    }
}
