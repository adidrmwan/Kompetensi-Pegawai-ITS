<?php

use Illuminate\Database\Seeder;

class LingkupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lingkup')->insert([
        	'deskripsi' => 'Internasional',
        ]);

        DB::table('lingkup')->insert([
        	'deskripsi' => 'Nasional',
        ]);

        DB::table('lingkup')->insert([
        	'deskripsi' => 'Lokal',
        ]);
    }
}
