<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateRuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_ruang');
            $table->string('nama_ruang');
            $table->string('lantai');
            $table->timestamps();
        });

        DB::table('ruangan')->insert(array('kode_ruang' => 'A1', 'nama_ruang' => 'R.AULA', 'lantai' => 'Lantai 1'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'A2', 'nama_ruang' => 'R.Pertemuan', 'lantai' => 'Lantai 1'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B1', 'nama_ruang' => 'R.Unggul', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B2', 'nama_ruang' => 'R.Integritas', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B3', 'nama_ruang' => 'R.Kebersamaan', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B4', 'nama_ruang' => 'R.Mushola', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B5', 'nama_ruang' => 'R.BPMMT', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B6', 'nama_ruang' => 'R.Kepuasan Pelanggan', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B7', 'nama_ruang' => 'R.Tanggap', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'B8', 'nama_ruang' => 'R.LSP', 'lantai' => 'Lantai 2'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'C1', 'nama_ruang' => 'R.Ammonia', 'lantai' => 'Lantai 3'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'C2', 'nama_ruang' => 'R.Urea Prill', 'lantai' => 'Lantai 3'));
        DB::table('ruangan')->insert(array('kode_ruang' => 'C3', 'nama_ruang' => 'R.Urea Granul', 'lantai' => 'Lantai 3'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruangan');
    }
}
