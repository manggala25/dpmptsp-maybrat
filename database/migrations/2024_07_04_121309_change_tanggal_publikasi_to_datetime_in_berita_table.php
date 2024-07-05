<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTanggalPublikasiToDatetimeInBeritaTable extends Migration
{
    public function up()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->datetime('tanggal_publikasi')->change();
        });
    }

    public function down()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->string('tanggal_publikasi')->change();
        });
    }
}
