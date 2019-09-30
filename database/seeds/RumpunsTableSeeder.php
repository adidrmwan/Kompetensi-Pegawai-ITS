<?php

use Illuminate\Database\Seeder;

class RumpunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rumpuns')->insert([
            'id' => '1',
        	'deskripsi' => 'Perbendaharaan',
        ]);
        DB::table('rumpuns')->insert([
            'id' => '2',
        	'deskripsi' => 'Akuntansi/Pelaporan',
        ]);
        DB::table('rumpuns')->insert([
            'id' => '3',
        	'deskripsi' => 'Inventarisasi Aset',
        ]);
    }
}
