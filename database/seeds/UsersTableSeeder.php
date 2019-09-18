<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
        	'id' => '1',
            'name' => 'admin',
            'email' => 'admin@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Pemimpin',
            'email' => 'pemimpin@kompeg.com',
            'password' => bcrypt('kompeg@2019'),
        ]);
    }
}
