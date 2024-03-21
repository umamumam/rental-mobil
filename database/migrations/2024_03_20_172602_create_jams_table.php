<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamsTable extends Migration
{
    public function up()
    {
        Schema::create('jams', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_waktu');
            $table->integer('jam')->nullable();
            $table->integer('hari')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jams');
    }
}
