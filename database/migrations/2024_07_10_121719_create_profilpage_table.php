<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilpage', function (Blueprint $table) {
            $table->id();
            $table->string('bg_hero');
            $table->string('title_hero');
            $table->string('img_visi');
            $table->string('title_visi');
            $table->string('title_misi');
            $table->string('title_moto');
            $table->string('title_tugas');
            $table->string('title_fungsi');
            $table->string('title_program');
            $table->string('title_publikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilpage');
    }
}
