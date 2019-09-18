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
        Schema::create('jawaban_ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_soal')->index();
            $table->integer('ujian_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('soal_ujian_id')->unsigned();
            $table->string('jawaban')->nullable();
            $table->integer('poin')->nullable();
            
            $table->enum('status', ['null', 'filled', 'correct', 'incorrect'])
                  ->default('null')
                  ->comment('null, filled, correct, incorrect');
            $table->timestamps();

            $table->foreign('soal_ujian_id')
                  ->references('id')->on('soal_ujian')
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
        Schema::drop('jawaban_ujian');
    }
}
