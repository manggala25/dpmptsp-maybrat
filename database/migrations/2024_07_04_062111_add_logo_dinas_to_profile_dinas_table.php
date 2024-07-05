<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLogoDinasToProfileDinasTable extends Migration
{
    public function up()
    {
        Schema::table('profile_dinas', function (Blueprint $table) {
            $table->string('logo_dinas')->nullable()->after('gambar_strukturorganisasi');
        });
    }

    public function down()
    {
        Schema::table('profile_dinas', function (Blueprint $table) {
            $table->dropColumn('logo_dinas');
        });
    }
}
