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
        Schema::create('cartas_baraja_tematica', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('baraja_tematica_id');
            $table->unsignedInteger('carta_id');
            $table->foreign('baraja_tematica_id')->references('id')->on('barajas_tematicas')->onDelete('cascade');
            $table->foreign('carta_id')->references('id')->on('cartas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas_baraja_tematica');
    }
};
