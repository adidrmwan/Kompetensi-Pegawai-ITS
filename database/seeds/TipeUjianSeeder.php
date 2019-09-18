<?php

use Illuminate\Database\Seeder;

class TipeUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipe_ujian')->insert([
            'kode_tipe' => 'A',
        	'deskripsi' => 'Salah Benar 4 Jabawan',
        ]);

        DB::table('tipe_ujian')->insert([
            'kode_tipe' => 'B',
            'deskripsi' => 'Salah Benar 5 Jabawan',
        ]);

        DB::table('tipe_ujian')->insert([
            'kode_tipe' => 'C',
        	'deskripsi' => 'Range 1-5',
        ]);
    }
}
