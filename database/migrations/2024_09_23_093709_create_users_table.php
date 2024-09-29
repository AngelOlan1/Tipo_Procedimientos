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
    Schema::create('users', function (Blueprint $table) {
        $table->id('Idu'); // Llave primaria
        $table->string('NomU'); // Nombre de usuario
        $table->string('ApPa'); // Apellido paterno
        $table->string('ApMa'); // Apellido materno
        $table->string('User'); // Usuario del sistema
        $table->string('Password'); // Contraseña
        $table->foreignId('C')->constrained('categorias', 'idC'); // Llave foránea
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
