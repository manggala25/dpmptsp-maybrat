<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFungsiTable extends Migration
{
    public function up()
    {
        Schema::create('fungsi', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fungsi');
    }
}
