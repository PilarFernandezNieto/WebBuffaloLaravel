<?php

namespace App\Console\Commands;

use App\Models\Noticia;
use Illuminate\Console\Command;
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
    protected $description = 'Genera los slugs faltantes para las noticias  existentes en la base de datos.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Buscando noticias sin slug...');

        // Obtenemos los noticias sin slug
        $noticias = Noticia::whereNull('slug')->orWhere('slug', '')->get();

        if ($noticias->isEmpty()) {
            $this->info('¡Perfecto! Todos los noticias ya tienen su slug.');

            return;
        }

        $count = 0;
        foreach ($noticias as $noticia) {
            $noticia->slug = Str::slug($noticia->titulo);
            // Desactivamos temporalmente los timestamps por si no quieres que se actualice la fecha de modificación
            $noticia->timestamps = false;
            $noticia->save();
            $this->line("Slug generado para: {$noticia->titulo} -> {$noticia->slug}");
            $count++;
        }

        $this->info("¡Completado! Se han actualizado {$count} noticias.");
    }
}
