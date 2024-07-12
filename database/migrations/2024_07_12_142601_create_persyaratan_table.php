<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersyaratanTable extends Migration
{
    public function up()
    {
        Schema::create('persyaratan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perizinan_id')->constrained('perizinan')->onDelete('cascade');
            $table->foreignId('kategori_persyaratan_id')->constrained('kategori_persyaratan')->onDelete('cascade');
            $table->string('persyaratan');
            $table->text('keterangan')->nullable();
            $table->string('template_file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('persyaratan');
    }
}
