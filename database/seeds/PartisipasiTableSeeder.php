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
        	'deskripsi' => 'Terpilih',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Pembicara',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Peserta',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Ketua',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Pengurus Inti',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Pengurus Non Inti',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Anggota',
        ]);
    }
}
