<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateKoderuangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koderuang', function (Blueprint $table) {
            $table->string('kode');
            $table->timestamps();
            $table->primary('kode');
        });
        DB::insert('insert into koderuang (kode) values (?)', ['A1']);
        DB::insert('insert into koderuang (kode) values (?)', ['A2']);
        DB::insert('insert into koderuang (kode) values (?)', ['B1']);
        DB::insert('insert into koderuang (kode) values (?)', ['B2']);
        DB::insert('insert into koderuang (kode) values (?)', ['B3']);
        DB::insert('insert into koderuang (kode) values (?)', ['B4']);
        DB::insert('insert into koderuang (kode) values (?)', ['B5']);
        DB::insert('insert into koderuang (kode) values (?)', ['B6']);
        DB::insert('insert into koderuang (kode) values (?)', ['B7']);
        DB::insert('insert into koderuang (kode) values (?)', ['B8']);
        DB::insert('insert into koderuang (kode) values (?)', ['C1']);
        DB::insert('insert into koderuang (kode) values (?)', ['C2']);
        DB::insert('insert into koderuang (kode) values (?)', ['C3']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koderuang');
    }
}
