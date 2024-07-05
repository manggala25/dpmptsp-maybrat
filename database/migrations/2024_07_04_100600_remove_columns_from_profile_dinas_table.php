<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromProfileDinasTable extends Migration
{
    public function up()
    {
        Schema::table('profile_dinas', function (Blueprint $table) {
            $table->dropColumn('id_proker');
            $table->dropColumn('id_kontak');
        });
    }

    public function down()
    {
        Schema::table('profile_dinas', function (Blueprint $table) {
            $table->integer('id_proker');
            $table->integer('id_kontak');
        });
    }
}
