<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bidang_ujian_id')->unsigned();
            $table->integer('tipe_ujian_id')->unsigned();
            $table->integer('jabatan_id')->unsigned();
            $table->integer('durasi_jam');
            $table->integer('durasi_menit');
            $table->integer('total_durasi');
            $table->integer('jumlah_soal');
            
            $table->enum('status', ['pending', 'active', 'closed'])
                  ->default('pending')
                  ->comment('pending, active, closed');
            $table->integer('entry_user')->unsigned();
            $table->timestamps();

            $table->foreign('bidang_ujian_id')
                  ->references('id')->on('bidang_ujian')
                  ->onDelete('cascade');

            $table->foreign('tipe_ujian_id')
                  ->references('id')->on('tipe_ujian')
                  ->onDelete('cascade');

            $table->foreign('jabatan_id')
                  ->references('id')->on('jabatans')
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
        Schema::drop('ujian');
    }
}
