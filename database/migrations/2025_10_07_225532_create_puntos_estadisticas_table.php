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
        Schema::create('puntos_estadisticas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedSmallInteger('puntos');
            $table->unsignedInteger('carta_id');
            $table->unsignedInteger('estadistica_id');
            $table->foreign('carta_id')->references('id')->on('cartas')->onDelete('cascade');
            $table->foreign('estadistica_id')->references('id')->on('estadisticas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puntos_estadisticas');
    }
};
