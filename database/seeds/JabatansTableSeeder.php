<?php

use Illuminate\Database\Seeder;

class JabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('jabatans')->insert([
            'id' => '1',
            'nama' => 'Staff',
            'rumpun' => 'Keuangan',
            'kelas' => '14',
            'nilai' => '600',
        ]);
    }
}
