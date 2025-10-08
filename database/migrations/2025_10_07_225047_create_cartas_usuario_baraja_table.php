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
        Schema::create('cartas_usuario_baraja', function (Blueprint $table)
        {
            $table->uuid('id')->primary();
            $table->unsignedInteger('baraja_id');
            $table->foreign('baraja_id')->references('id')->on('barajas')->onDelete('cascade');
            $table->foreignUuid('carta_usuario_id')->references('id')->on('cartas_usuario')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas_usuario_baraja');
    }
};
