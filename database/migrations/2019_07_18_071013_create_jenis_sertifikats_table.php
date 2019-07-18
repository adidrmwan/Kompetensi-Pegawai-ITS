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
            $table->string('deskripsi');
            $table->integer('poin');
            $table->integer('entry_user')->unsigned();
            $table->timestamps();

            $table->foreign('lingkup_id')
                  ->references('id')->on('lingkup')
                  ->onDelete('cascade');

            $table->foreign('bidang_id')
                  ->references('id')->on('bidang')
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
        Schema::drop('jenis_sertifikat');
    }
}
