<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
        	'id' => '1',
            'nip' => '1',
            'name' => 'Admin',
            'jabatan_sekarang' => '1',
            'jabatan_impian' => '1',
            'tmt_jabatan' => '09-03-2019',
            'masa_kerja' => '100',
            'email' => 'admin@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'nip' => '12345',
            'name' => 'Buana Jelita',
            'jabatan_sekarang' => '1',
            'jabatan_impian' => '1',
            'tmt_jabatan' => '09-03-2019',
            'masa_kerja' => '4',
            'email' => 'pegawai1@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'nip' => '3',
            'name' => 'Pemimpin',
            'jabatan_sekarang' => '1',
            'jabatan_impian' => '1',
            'tmt_jabatan' => '09-03-2019',
            'masa_kerja' => '100',
            'email' => 'pemimpin@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);

        DB::table('users')->insert([
            'id' => '4',
            'nip' => '41213',
            'name' => 'Adi Darmawan',
            'jabatan_sekarang' => '2',
            'jabatan_impian' => '5',
            'tmt_jabatan' => '09-03-2019',
            'masa_kerja' => '4',
            'email' => 'pegawai2@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);


        DB::table('users')->insert([
            'id' => '5',
            'nip' => '53212',
            'name' => 'Ida Darmanwan',
            'jabatan_sekarang' => '1',
            'jabatan_impian' => '4',
            'tmt_jabatan' => '09-03-2019',
            'masa_kerja' => '4',
            'email' => 'pegawai3@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);


        DB::table('users')->insert([
            'id' => '6',
            'nip' => '64357',
            'name' => 'Uda Darmawan',
            'jabatan_sekarang' => '2',
            'jabatan_impian' => '7',
            'tmt_jabatan' => '09-03-2019',
            'masa_kerja' => '4',
            'email' => 'pegawai4@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);

    }
}
