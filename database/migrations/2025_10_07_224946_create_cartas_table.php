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
        Schema::create('cartas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedSmallInteger('numero');
            $table->string('nombre', length: 25);
            $table->enum('tipo_carta', ['Unidad', 'Civil', 'Tecnología', 'Edificio', 'Arma']);
            $table->enum('edad', ['Edad de Bronce', 'Edad de Hierro', 'Edad Media']);
            $table->unsignedInteger('expansion_id');
            $table->unsignedInteger('clase_id');
            $table->unsignedInteger('unidad_id');
            $table->unsignedInteger('entrenamiento_id');
            $table->unsignedInteger('habilidad_id');
            $table->foreign('expansion_id')->references('id')->on('expansiones')->onDelete('cascade');
            $table->foreign('clase_id')->references('id')->on('clases')->onDelete('cascade');
            $table->foreign('unidad_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->foreign('entrenamiento_id')->references('id')->on('entrenamientos')->onDelete('cascade');
            $table->foreign('habilidad_id')->references('id')->on('habilidades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas');
    }
};
