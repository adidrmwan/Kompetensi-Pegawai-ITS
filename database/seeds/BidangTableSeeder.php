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
        	'deskripsi' => 'Pelatihan Teknis',
        ]);

        DB::table('bidang')->insert([
        	'deskripsi' => 'Seminar / Konferensi',
        ]);

        DB::table('bidang')->insert([
        	'deskripsi' => 'Workshop / Sosialisasi',
        ]);

        DB::table('bidang')->insert([
            'deskripsi' => 'Magang / Internship',
        ]);

        DB::table('bidang')->insert([
            'deskripsi' => 'Lomba',
        ]);

        DB::table('bidang')->insert([
        	'deskripsi' => 'Kepanitiaan',
        ]);
    }
}
