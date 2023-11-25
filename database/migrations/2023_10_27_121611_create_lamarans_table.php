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
        Schema::create('lamarans', function (Blueprint $table) {
            $table->increments('id_lamaran');
            $table->string('nisn')->nullable();
            $table->unsignedInteger('id_admin')->nullable();
            $table->unsignedInteger('id_lowongan');
            $table->text('surat_lamaran');
            $table->text('cv');
            $table->foreign('nisn')->references('nisn')->on('alumnis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_admin')->references('id_admin')->on('admins')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_lowongan')->references('id_lowongan')->on('lowongans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
