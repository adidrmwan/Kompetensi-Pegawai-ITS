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
        	'deskripsi' => 'Penalaran Analitis',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Penalaran Logika',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Persamaan Kata',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Lawan Kata',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Analogi',
        ]);
    }
}
