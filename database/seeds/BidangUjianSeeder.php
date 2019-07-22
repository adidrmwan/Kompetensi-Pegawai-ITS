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
        	'deskripsi' => 'Penalaran dan Keilmuan',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Minat dan Bakat',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'Organisasi dan Kepemimpinan',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'IPA',
        ]);

        DB::table('bidang_ujian')->insert([
        	'deskripsi' => 'IPS',
        ]);
    }
}
