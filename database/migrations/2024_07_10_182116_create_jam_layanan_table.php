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
        Schema::create('jam_layanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hari');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->enum('status', ['buka', 'libur'])->default('buka');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jam_layanan');
    }
};
