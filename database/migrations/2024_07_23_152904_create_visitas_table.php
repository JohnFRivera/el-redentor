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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prisionero');
            $table->unsignedBigInteger('id_visitante');
            $table->unsignedBigInteger('id_guardia');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->boolean('estado');
            $table->timestamps();
            $table->foreign('id_prisionero')->references('id')->on('prisioneros');
            $table->foreign('id_visitante')->references('id')->on('visitantes');
            $table->foreign('id_guardia')->references('id')->on('guardias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
