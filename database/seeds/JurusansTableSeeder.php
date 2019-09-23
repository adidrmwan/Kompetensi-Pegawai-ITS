<?php

use Illuminate\Database\Seeder;

class JurusansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('jurusans')->insert([
        	'deskripsi' => 'Akuntansi',
        ]);

        DB::table('jurusans')->insert([
        	'deskripsi' => 'Manajemen Keuangan',
        ]);

        DB::table('jurusans')->insert([
        	'deskripsi' => 'Perpajakan',
        ]);

        DB::table('jurusans')->insert([
            'deskripsi' => 'Ekonomi',
        ]);

        DB::table('jurusans')->insert([
            'deskripsi' => 'Lainnya',
        ]);
    }
}
