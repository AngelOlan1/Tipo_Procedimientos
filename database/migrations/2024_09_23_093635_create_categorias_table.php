<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('categorias', function (Blueprint $table) {
        $table->id('idC'); // Llave primaria
        $table->string('Categoria'); // Nombre de la categoría
        $table->integer('Nivel'); // Valor numérico
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
