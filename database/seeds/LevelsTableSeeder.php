<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
        	'deskripsi' => 'Mahir',
        ]);

        DB::table('levels')->insert([
        	'deskripsi' => 'Menengah',
        ]);

        DB::table('levels')->insert([
        	'deskripsi' => 'Dasar',
        ]);
    }
}
