<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nip')->nullable()->index();
            $table->string('name');
            $table->integer('jabatan_sekarang')->unsigned();
            $table->integer('jabatan_impian')->unsigned();
            $table->date('tmt_jabatan')->nullable();
            $table->integer('masa_kerja')->nullable();
            $table->string('email')->unique()->index();
            $table->string('password');

            $table->foreign('jabatan_sekarang')
                  ->references('id')->on('jabatans')
                  ->onDelete('cascade');
            $table->foreign('jabatan_impian')
                  ->references('id')->on('jabatans')
                  ->onDelete('cascade');

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
