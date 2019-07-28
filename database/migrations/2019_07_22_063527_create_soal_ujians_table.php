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
            $table->integer('kode_soal');
            $table->longText('deskripsi');
            $table->longText('pilihan_a');
            $table->longText('pilihan_b');
            $table->longText('pilihan_c');
            $table->longText('pilihan_d');
            $table->longText('pilihan_e')->nullable();
            $table->string('kunci_jawaban')->nullable();
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
