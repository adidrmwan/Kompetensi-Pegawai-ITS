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
            $table->integer('user_id')->unsigned();
            $table->integer('jenis_sertifikat_id')->unsigned();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('partisipasi');
            $table->string('penyelenggara');
            $table->string('tempat_diselenggarakan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('no_sertifikat')->nullable();
            $table->date('tanggal_sertifikat');
            $table->string('uploaded_file');
            $table->enum('status', ['pending', 'approved', 'rejected'])
                  ->default('pending')
                  ->comment('pending, approved, rejected');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
                  
            $table->foreign('jenis_sertifikat_id')
                  ->references('id')->on('jenis_sertifikat')
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
