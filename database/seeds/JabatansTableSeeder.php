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
            'nama' => 'Analisis Perencanaan Program dan Anggaran',
            'rumpun_id' => '1',
            'kelas' => '6',
            'nilai' => '900',
        ]);
         DB::table('jabatans')->insert([
            'id' => '2',
            'nama' => 'Analisis Pelaksana Program dan Anggaran',
            'rumpun_id' => '1',
            'kelas' => '6',
            'nilai' => '900',
        ]);
         DB::table('jabatans')->insert([
            'id' => '3',
            'nama' => 'Pengolah Data Program dan Anggaran',
            'rumpun_id' => '1',
            'kelas' => '5',
            'nilai' => '740',
        ]);
         DB::table('jabatans')->insert([
            'id' => '4',
            'nama' => 'Pemelihara Dokumen dan Laporan',
            'rumpun_id' => '1',
            'kelas' => '4',
            'nilai' => '670',
        ]);
         DB::table('jabatans')->insert([
            'id' => '5',
            'nama' => 'Pengadministrasi Program dan Laporan',
            'rumpun_id' => '1',
            'kelas' => '4',
            'nilai' => '630',
        ]);
         DB::table('jabatans')->insert([
            'id' => '6',
            'nama' => 'Bendahara Penerima/Pengeluaran Institut',
            'rumpun_id' => '2',
            'kelas' => '6',
            'nilai' => '900',
        ]);
         DB::table('jabatans')->insert([
            'id' => '7',
            'nama' => 'Bendahara Pengeluaran Pembantu',
            'rumpun_id' => '2',
            'kelas' => '5',
            'nilai' => '800',
        ]);
         DB::table('jabatans')->insert([
            'id' => '8',
            'nama' => 'Pengelolaan Administrasi Belanja Pegawai',
            'rumpun_id' => '2',
            'kelas' => '5',
            'nilai' => '740',
        ]);
         DB::table('jabatans')->insert([
            'id' => '9',
            'nama' => 'Penata Dokumen Keuangan',
            'rumpun_id' => '2',
            'kelas' => '4',
            'nilai' => '630',
        ]);
         DB::table('jabatans')->insert([
            'id' => '10',
            'nama' => 'Penyusun Laporan SAK',
            'rumpun_id' => '3',
            'kelas' => '6',
            'nilai' => '900',
        ]);
         DB::table('jabatans')->insert([
            'id' => '11',
            'nama' => 'Pengolah Data Pertanggung Jawaban Keuangan',
            'rumpun_id' => '3',
            'kelas' => '5',
            'nilai' => '700',
        ]);
         DB::table('jabatans')->insert([
            'id' => '12',
            'nama' => 'Penyusun Laporan Aset',
            'rumpun_id' => '4',
            'kelas' => '6',
            'nilai' => '900',
        ]);
         DB::table('jabatans')->insert([
            'id' => '13',
            'nama' => 'Pengolah Data Aset',
            'rumpun_id' => '4',
            'kelas' => '5',
            'nilai' => '700',
        ]);
         DB::table('jabatans')->insert([
            'id' => '14',
            'nama' => 'Pengadministrasi Aset',
            'rumpun_id' => '4',
            'kelas' => '4',
            'nilai' => '620',
        ]);
    }
}
