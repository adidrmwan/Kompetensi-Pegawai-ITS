<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_sertifikat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lingkup_id')->unsigned();
            $table->integer('bidang_id')->unsigned();
            $table->integer('partisipasi_id')->unsigned()->nullable();
            $table->integer('level_id')->unsigned()->nullable();
            $table->integer('pendidikan_id')->unsigned()->nullable();
            $table->integer('jurusan_id')->unsigned()->nullable();
            $table->string('deskripsi')->nullable();
            $table->integer('poin');
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
        Schema::drop('jenis_sertifikat');
    }
}
