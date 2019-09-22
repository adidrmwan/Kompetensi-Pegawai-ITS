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
        	'deskripsi' => 'Pemenang',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Finalis',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Ketua',
        ]);
        DB::table('partisipasi')->insert([
            'deskripsi' => 'Koordinator',
        ]);
        DB::table('partisipasi')->insert([
        	'deskripsi' => 'Anggota',
        ]);
        DB::table('partisipasi')->insert([
            'deskripsi' => 'Peserta',
        ]);
        DB::table('partisipasi')->insert([
            'deskripsi' => 'Pemateri / Penulis',
        ]);
        
    }
}
