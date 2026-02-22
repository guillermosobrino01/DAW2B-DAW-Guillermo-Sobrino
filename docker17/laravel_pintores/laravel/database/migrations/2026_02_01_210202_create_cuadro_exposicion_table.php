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
        Schema::create('cuadro_exposicion', function (Blueprint $table) {
            $table->foreignId('cuadro_id');
            $table->foreignId('exposicion_id');
            $table->foreign('cuadro_id')->references('id')->on('cuadros');
            $table->foreign('exposicion_id')->references('id')->on('exposiciones');
            $table->primary(['cuadro_id', 'exposicion_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadro_exposicion');
    }
};
