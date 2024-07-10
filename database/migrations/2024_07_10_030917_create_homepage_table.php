<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageTable extends Migration
{
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->string('logo_dark');
            $table->string('logo_white');
            $table->string('bg_hero');
            $table->string('title_hero');
            $table->text('paragraf_hero');
            $table->string('img_profil');
            $table->string('title_profil');
            $table->string('title_fungsi');
            $table->string('title_tugas');
            $table->string('title_layanan');
            $table->text('paragraf_layanan');
            $table->string('title_portal');
            $table->text('paragraf_portal');
            $table->string('title_berita');
            $table->text('paragraf_berita');
            $table->string('title_ucapan');
            $table->text('paragraf_ucapan');
            $table->string('title_instansi');
            $table->text('paragraf_instansi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('homepage');
    }
}
