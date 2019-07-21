<?php

use Illuminate\Database\Seeder;

class BidangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidang')->insert([
        	'deskripsi' => 'Penalaran dan Keilmuan',
        ]);

        DB::table('bidang')->insert([
        	'deskripsi' => 'Minat dan Bakat',
        ]);

        DB::table('bidang')->insert([
        	'deskripsi' => 'Organisasi dan Kepemimpinan',
        ]);

        DB::table('bidang')->insert([
        	'deskripsi' => 'Kegiatan Kepedulian Sosial',
        ]);
    }
}
