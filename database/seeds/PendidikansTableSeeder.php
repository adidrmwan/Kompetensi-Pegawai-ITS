<?php

use Illuminate\Database\Seeder;

class PendidikansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikans')->insert([
        	'deskripsi' => 'S3',
        ]);

        DB::table('pendidikans')->insert([
        	'deskripsi' => 'S2',
        ]);

        DB::table('pendidikans')->insert([
        	'deskripsi' => 'S1 / D4',
        ]);

        DB::table('pendidikans')->insert([
            'deskripsi' => 'SMA / K',
        ]);

        DB::table('pendidikans')->insert([
            'deskripsi' => 'SMP',
        ]);

        DB::table('pendidikans')->insert([
        	'deskripsi' => 'SD',
        ]);
    }
}
