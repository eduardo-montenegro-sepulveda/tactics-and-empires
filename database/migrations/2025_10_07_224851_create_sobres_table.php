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
        Schema::create('sobres', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombre', length: 50);
            $table->unsignedInteger('expansion_id');
            $table->foreign('expansion_id')->references('id')->on('expansiones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sobres');
    }
};
