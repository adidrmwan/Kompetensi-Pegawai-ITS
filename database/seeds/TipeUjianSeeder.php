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
            'nama' => 'Kompetensi Teknis',
        	'deskripsi' => 'Salah Benar 4 Jabawan',
        ]);

        DB::table('tipe_ujian')->insert([
            'kode_tipe' => 'B',
            'nama' => 'Kompetensi Umum',
            'deskripsi' => 'Salah Benar 5 Jabawan',
        ]);

        DB::table('tipe_ujian')->insert([
            'kode_tipe' => 'C',
            'nama' => 'Soft Kompetensi',
        	'deskripsi' => 'Range pilihan 1-5',
        ]);
    }
}
