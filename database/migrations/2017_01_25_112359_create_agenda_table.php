<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
          $table->increments('id');
          $table->date('tanggal_mulai');
          $table->date('tanggal_selesai');
          $table->string('kode_ruang');
          $table->string('nama_ruang');
          $table->string('lantai');
          $table->text('nama_acara');
          $table->text('keterangan_acara');
          // $table->integer('ditampilkan');
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
        Schema::dropIfExists('agenda');
    }
}
