<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSertifikatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipe_pelatihan_id')->unsigned();
            $table->string('judul');
            $table->string('deskripsi');
            $table->date('tanggal_pelatihan');
            $table->enum('status', ['pending', 'approved', 'rejected'])
                    ->default('pending')
                    ->comment('pending, approved, rejected');
            $table->integer('entry_user')->unsigned();
            $table->timestamps();

            $table->foreign('tipe_pelatihan_id')
                  ->references('id')->on('tipe_pelatihan')
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
        Schema::drop('sertifikat');
    }
}
