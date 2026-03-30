<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Producto;
use Illuminate\Support\Str;

class GenerateSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera los slugs faltantes para los productos (discos/camisetas) existentes en la base de datos.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Buscando productos sin slug...');
        
        // Obtenemos los productos sin slug
        $productos = Producto::whereNull('slug')->orWhere('slug', '')->get();

        if ($productos->isEmpty()) {
            $this->info('¡Perfecto! Todos los productos ya tienen su slug.');
            return;
        }

        $count = 0;
        foreach ($productos as $producto) {
            $producto->slug = Str::slug($producto->nombre);
            // Desactivamos temporalmente los timestamps por si no quieres que se actualice la fecha de modificación
            $producto->timestamps = false;
            $producto->save();
            $this->line("Slug generado para: {$producto->nombre} -> {$producto->slug}");
            $count++;
        }

        $this->info("¡Completado! Se han actualizado {$count} productos.");
    }
}
