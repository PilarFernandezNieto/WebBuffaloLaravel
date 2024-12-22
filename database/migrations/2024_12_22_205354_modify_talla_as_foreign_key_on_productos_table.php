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
        Schema::table('productos', function (Blueprint $table) {
            $table->dropColumn('talla');

            $table->unsignedBigInteger('talla_id')->nullable();

            $table->foreign('talla_id')->references('id')->on('tallas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            // Eliminar la clave foránea
            $table->dropForeign(['talla_id']);

            // Eliminar la columna talla_id
            $table->dropColumn('talla_id');

            // Volver a crear la columna talla original si es necesario
            $table->string('talla')->nullable();
        });
    }
};
