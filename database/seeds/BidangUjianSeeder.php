<?php

use Illuminate\Database\Seeder;

class BidangUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Kompetensi Umum',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Kompetensi Teknis',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Soft Kompetensi',
        ]);
    }
}
