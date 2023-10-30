<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * TABLA PARA REGISTRAR PELICULAS
     */
    public function up(): void
    {   
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();

            $table->string('titulo_p',255);
            $table->text('descripcion_p');
            $table->string('categoria_p',100);
            $table->text('imagen_p');
            $table->string('trailer_p',100);
            $table->string('duracion_p',100);
            $table->text('link1_p');
            $table->text('link2_p');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
