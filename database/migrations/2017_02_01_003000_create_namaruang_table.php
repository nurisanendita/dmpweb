<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateNamaruangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namaruang', function (Blueprint $table) {
            $table->string('nama');
            $table->timestamps();
            $table->primary ('nama');
        });
        DB::insert('insert into namaruang (nama) values (?)', ['R. AULA']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Pertemuan']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Unggul']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Integritas']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Kebersamaan']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Mushola']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. BPMMT']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Kepuasan Pelanggan']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Tanggap']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. LSP']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Ammonia']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Urea Prill']);
        DB::insert('insert into namaruang (nama) values (?)', ['R. Urea Granul']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('namaruang');
    }
}
