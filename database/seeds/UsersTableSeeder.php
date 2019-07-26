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
            'name' => 'admin',
            'email' => 'admin@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'nip' => '902106001',
            'name' => 'Mulyawan Sunardi',
            'jabatan' => 'Pengolah Data Pendidikan',
            'tmt_jabatan' => '01/01/17',
            'unit_kerja' => 'Sub Bagian Pemantauan dan Evaluasi Pembelajaran, BAPKM',
            'kelas_jabatan' => '5',
            'nilai_jabatan' => '670',
            'email' => '902106001',
            'password' => bcrypt('kompeg@2019'),
        ]);

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'Pemimpin',
            'email' => 'pemimpin@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);
    }
}
