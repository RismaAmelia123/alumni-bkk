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
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->increments('id_perusahaan');
            $table->string('nisn')->nullable();
            $table->unsignedInteger('id_admin')->nullable();
            $table->string('perusahaan');
            $table->string('kontak', 13);
            $table->text('alamat');
            $table->text('deskripsi');
            $table->text('foto');
            $table->enum('status',['0','Posting']);
            $table->foreign('nisn')->references('nisn')->on('alumnis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_admin')->references('id_admin')->on('admins')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaans');
    }
};
