<?php

use Illuminate\Database\Seeder;
use App\Models\TipePelatihan as Model;
class TipePelatihanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = Model::create([
        	'deskripsi' => 'tipe 1',
        	'nilai' => '10'
        ]);

        $query = Model::create([
        	'deskripsi' => 'tipe 2',
        	'nilai' => '20'
        ]);

        $query = Model::create([
        	'deskripsi' => 'tipe 3',
        	'nilai' => '30'
        ]);

        $query = Model::create([
        	'deskripsi' => 'tipe 4',
        	'nilai' => '40'
        ]);
    }
}
