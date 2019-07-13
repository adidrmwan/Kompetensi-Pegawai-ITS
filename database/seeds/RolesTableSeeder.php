<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert([
        	'id' => '1',
        	'name' => 'admin',
        	'description' => 'admin'
        ]);

        DB::table('roles')->insert([
        	'id' => '2',
        	'name' => 'pegawai',
        	'description' => 'pegawai'
        ]);

        DB::table('roles')->insert([
        	'id' => '3',
        	'name' => 'pemimpin',
        	'description' => 'pemimpin'
        ]);
    }
}
