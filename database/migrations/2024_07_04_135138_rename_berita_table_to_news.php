<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameBeritaTableToNews extends Migration
{
    public function up()
    {
        Schema::rename('berita', 'news');
    }

    public function down()
    {
        Schema::rename('news', 'berita');
    }
}
