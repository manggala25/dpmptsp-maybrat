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
        Schema::create('portal', function (Blueprint $table) {
            $table->id();
            $table->string('nama_portal');
            $table->string('deskripsi_portal');
            $table->string('link_portal');
            $table->string('gambar_portal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portal');
    }
};
