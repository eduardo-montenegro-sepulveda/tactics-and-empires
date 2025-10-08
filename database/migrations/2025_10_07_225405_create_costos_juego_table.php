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
        Schema::create('costos_juego', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedTinyInteger('unidades');
            $table->unsignedInteger('carta_id');
            $table->unsignedInteger('recurso_id');
            $table->foreign('carta_id')->references('id')->on('cartas')->onDelete('cascade');
            $table->foreign('recurso_id')->references('id')->on('recursos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costos_juego');
    }
};
