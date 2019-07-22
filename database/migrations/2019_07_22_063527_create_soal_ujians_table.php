<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoalUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ujian_id')->unsigned();
            $table->integer('no_soal');
            $table->text('deskripsi');
            $table->string('pilihan_a');
            $table->string('pilihan_b');
            $table->string('pilihan_c');
            $table->string('pilihan_d');
            $table->string('kunci_jawaban');
            $table->enum('status', ['active', 'nonactive'])
                  ->default('active')
                  ->comment('active, nonactive');
            $table->integer('entry_user')->unsigned();
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
        Schema::drop('soal_ujian');
    }
}
