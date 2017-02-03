<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateLantairuangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lantairuang', function (Blueprint $table) {
            $table->string('lantai');
            $table->timestamps();
            $table->primary('lantai');
        });
        DB::insert('insert into lantairuang (lantai) values (?)', ['Lantai 1']);
        DB::insert('insert into lantairuang (lantai) values (?)', ['Lantai 2']);
        DB::insert('insert into lantairuang (lantai) values (?)', ['Lantai 3']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lantairuang');
    }
}
