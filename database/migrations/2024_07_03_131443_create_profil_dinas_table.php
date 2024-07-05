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
        Schema::create('profil_dinas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dinas');
            $table->text('deskripsi');
            $table->string('dasarhukum');
            $table->text('visi');
            $table->text('misi');
            $table->text('tujuan');
            $table->unsignedBigInteger('id_proker');
            $table->string('gambar_strukturorganisasi');
            $table->unsignedBigInteger('id_kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_dinas');
    }
};
