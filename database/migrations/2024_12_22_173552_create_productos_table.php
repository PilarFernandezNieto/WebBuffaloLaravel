<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('anio_edicion');
            $table->string('color');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('formato_id')->constrained()->onDelete('cascade');
            $table->string('imagen');
            $table->text('informacion');
            $table->text('textos');
            $table->string('sello');
            $table->integer('stock');
            $table->string('talla');
            $table->float('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
