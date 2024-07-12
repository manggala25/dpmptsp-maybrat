<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTahapanPengajuanTable extends Migration
{
    public function up()
    {
        Schema::create('tahapan_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tahapan');
            $table->text('deskripsi');
            $table->string('icon');
            $table->integer('urutan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tahapan_pengajuan');
    }
}
