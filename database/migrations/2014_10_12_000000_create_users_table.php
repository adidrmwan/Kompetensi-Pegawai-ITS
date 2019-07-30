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
            $table->string('jabatan')->nullable();
            $table->date('tmt_jabatan')->nullable();
            $table->string('unit_kerja')->nullable();
            $table->string('kelas_jabatan')->nullable();
            $table->string('nilai_jabatan')->nullable();
            $table->string('email')->unique()->index();
            $table->string('password');
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
