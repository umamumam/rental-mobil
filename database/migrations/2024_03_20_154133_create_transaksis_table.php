<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
			$table->string('nama');
			$table->string('mobil');
			$table->string('plat');
			$table->date('tanggal_mulai');
			$table->date('tanggal_selesai');
			$table->time('waktu');
			$table->integer('tarif');
			$table->enum('status_mobil', ['Tersedia', 'Sudah Disewa'])->default('Tersedia');
			$table->enum('status_pembayaran', ['Lunas', 'Belum Terbayar'])->default('Belum Terbayar');
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
        Schema::dropIfExists('transaksis');
    }
}
