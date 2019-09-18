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
            $table->increments('id');
            $table->string('nip')->nullable()->index();
            $table->string('name');
            $table->integer('jabatan_id')->unsigned();
            $table->date('tmt_jabatan')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('email')->unique()->index();
            $table->string('password');

            // $table->foreign('jabatan_id')
            //       ->references('id')->on('jabatans')
            //       ->onDelete('cascade');

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
