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
        Schema::create('lowongans', function (Blueprint $table) {
            $table->increments('id_lowongan');
            $table->string('nisn')->nullable();
            $table->unsignedInteger('id_admin')->nullable();
            $table->unsignedInteger('id_perusahaan');
            $table->string('lowongan');
            $table->string('syarat');
            $table->string('keahlian');
            $table->string('kualifikasi');
            $table->string('jam_kerja');
            $table->string('gaji');
            $table->string('pendidikan');
            $table->string('tipe_pekerjaan');
            $table->date('tgl_post');
            $table->date('tgl_akhir');
            $table->enum('status',['0','Posting']);
            $table->foreign('nisn')->references('nisn')->on('alumnis')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_admin')->references('id_admin')->on('admins')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_perusahaan')->references('id_perusahaan')->on('perusahaans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
