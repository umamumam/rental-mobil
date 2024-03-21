<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
			$table->string('foto');
			$table->string('merek');
			$table->string('model');
			$table->string('no_plat');
			$table->integer('tarif');
            $table->enum('kapasitas', ['Maksimal 5 orang dewasa', 'Maksimal 6 orang dewasa', 'Maksimal 8 orang dewasa', 'Maksimal 12 orang dewasa'])->default('Maksimal 5 orang dewasa');
            $table->enum('status', ['Tersedia', 'Sudah Disewa'])->default('Tersedia');
            $table->enum('keterangan', ['12 Jam Lepas Kunci', '12 Jam + Driver', '24 Jam Lepas Kunci', '24 Jam + Driver'])->default('12 Jam Lepas Kunci');
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
        Schema::dropIfExists('mobils');
    }
}
