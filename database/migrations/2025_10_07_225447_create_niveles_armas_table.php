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
        Schema::create('niveles_armas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->enum('nivel_arma', ['E', 'D', 'C', 'B', 'A']);
            $table->unsignedInteger('carta_id');
            $table->unsignedInteger('arma_id');
            $table->foreign('carta_id')->references('id')->on('cartas')->onDelete('cascade');
            $table->foreign('arma_id')->references('id')->on('armas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveles_armas');
    }
};
