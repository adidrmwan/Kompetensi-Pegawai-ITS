<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_soal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soal_ujian_id')->unsigned();
            $table->string('jawaban');
            $table->integer('poin');
            $table->enum('status', ['null', 'correct', 'incorrect'])
                  ->default('null')
                  ->comment('null, correct, incorrect');
            $table->timestamps();

            $table->foreign('soal_ujian_id')
                  ->references('id')->on('soal_ujian')
                  ->onDelete('cascade');
        });

        Schema::create('header_ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ujian_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->datetime('waktu_mulai');
            $table->datetime('waktu_selesai');
            $table->integer('nilai');
            $table->enum('status', ['on_test', 'finished'])
                  ->default('on_test')
                  ->comment('on_test, finished');
            $table->timestamps();

            $table->foreign('ujian_id')
                  ->references('id')->on('ujian')
                  ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jawaban_soal');
    }
}
