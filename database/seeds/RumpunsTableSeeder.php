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
        	'nama' => 'Perencanaan Anggaran dan Program',
        ]);
        DB::table('rumpuns')->insert([
            'id' => '2',
        	'nama' => 'Perbendaharaan',
        ]);
        DB::table('rumpuns')->insert([
            'id' => '3',
        	'nama' => 'Akuntansi Pelaporan',
        ]);
        DB::table('rumpuns')->insert([
            'id' => '4',
        	'nama' => 'Pelaporan Aset',
        ]);
    }
}
