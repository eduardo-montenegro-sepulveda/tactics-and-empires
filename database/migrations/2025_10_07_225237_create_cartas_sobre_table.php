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
        Schema::create('cartas_sobre', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('sobre_id');
            $table->unsignedInteger('carta_id');
            $table->foreign('sobre_id')->references('id')->on('sobres')->onDelete('cascade');
            $table->foreign('carta_id')->references('id')->on('cartas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas_sobre');
    }
};
