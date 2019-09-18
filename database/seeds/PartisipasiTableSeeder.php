<?php

use Illuminate\Database\Seeder;

class PartisipasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Juara',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Finalis',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Panitia',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Pembicara',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Peserta',
        ]);
    }
}
