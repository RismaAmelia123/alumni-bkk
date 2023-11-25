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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->string('nisn');
            $table->string('nis');
            $table->string('nama_alumni');
            $table->date('ttl');
            $table->enum('jk', ['L','P']);
            $table->string('thn_angkatan');
            $table->text('ktp');
            $table->text('ijazah_pendidikan');
            $table->text('transkrip_nilai');
            $table->text('skck');
            $table->text('kartu_kuning');
            $table->text('sks');
            $table->text('alamat');
            $table->string('kontak', 13);
            $table->text('foto');
            $table->string('password');
            $table->primary('nisn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
