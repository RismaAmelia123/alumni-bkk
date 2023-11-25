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
        Schema::create('testimonis', function (Blueprint $table) {
            $table->increments('id_testimoni');
            $table->string('nisn');
            $table->unsignedInteger('id_lowongan');
            $table->string('testimoni');
            $table->foreign('nisn')->references('nisn')->on('alumnis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_lowongan')->references('id_lowongan')->on('lowongans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
