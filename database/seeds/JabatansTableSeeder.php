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
            'nama' => 'Penata Dokumen Keuangan',
            'rumpun_id' => '1',
            'kelas' => '4',
            'nilai' => '630',
        ]);
         DB::table('jabatans')->insert([
            'id' => '2',
            'nama' => 'Bendahara Pengeluaran Pembantu di Departemen Grade D',
            'rumpun_id' => '1',
            'kelas' => '5',
            'nilai' => '700',
        ]);
         DB::table('jabatans')->insert([
            'id' => '3',
            'nama' => 'Bendahara Pengeluaran Pembantu di Departemen Grade C',
            'rumpun_id' => '1',
            'kelas' => '5',
            'nilai' => '725',
        ]);
         DB::table('jabatans')->insert([
            'id' => '4',
            'nama' => 'Bendahara Pengeluaran Pembantu di Departemen Grade B',
            'rumpun_id' => '1',
            'kelas' => '5',
            'nilai' => '750',
        ]);
         DB::table('jabatans')->insert([
            'id' => '5',
            'nama' => 'Bendahara Pengeluaran Pembantu di KPA dan lainnya',
            'rumpun_id' => '1',
            'kelas' => '5',
            'nilai' => '750',
        ]);
         DB::table('jabatans')->insert([
            'id' => '6',
            'nama' => 'Bendahara Pengeluaran Pembantu di Departemen Grade A',
            'rumpun_id' => '1',
            'kelas' => '5',
            'nilai' => '775',
        ]);
         DB::table('jabatans')->insert([
            'id' => '7',
            'nama' => 'Bendahara Pengeluaran Pembantu di LPPM',
            'rumpun_id' => '2',
            'kelas' => '5',
            'nilai' => '775',
        ]);
         DB::table('jabatans')->insert([
            'id' => '8',
            'nama' => 'Bendahara Pengeluaran Pembantu di BPPU dan Biro Keuangan',
            'rumpun_id' => '1',
            'kelas' => '5',
            'nilai' => '800',
        ]);
         DB::table('jabatans')->insert([
            'id' => '9',
            'nama' => 'Bendahara',
            'rumpun_id' => '1',
            'kelas' => '6',
            'nilai' => '900',
        ]);
         DB::table('jabatans')->insert([
            'id' => '10',
            'nama' => 'Pengadministrasi Umum',
            'rumpun_id' => '2',
            'kelas' => '4',
            'nilai' => '620',
        ]);
         DB::table('jabatans')->insert([
            'id' => '11',
            'nama' => 'Pengolah Data Keuangan',
            'rumpun_id' => '2',
            'kelas' => '5',
            'nilai' => '700',
        ]);
         DB::table('jabatans')->insert([
            'id' => '12',
            'nama' => 'Petugas Pengelolaan Administrasi Belanja Pegawai',
            'rumpun_id' => '2',
            'kelas' => '5',
            'nilai' => '740',
        ]);
         DB::table('jabatans')->insert([
            'id' => '13',
            'nama' => 'Penyusun Laporan Keuangan',
            'rumpun_id' => '2',
            'kelas' => '6',
            'nilai' => '900',
        ]);
         DB::table('jabatans')->insert([
            'id' => '14',
            'nama' => 'Pengadministrasi Barang Milik Negara',
            'rumpun_id' => '3',
            'kelas' => '4',
            'nilai' => '620',
        ]);
         DB::table('jabatans')->insert([
            'id' => '15',
            'nama' => 'Pengolah Data Barang Mlik Negara',
            'rumpun_id' => '3',
            'kelas' => '5',
            'nilai' => '700',
        ]);
         DB::table('jabatans')->insert([
            'id' => '16',
            'nama' => 'Penyusun Laporan Barang Milik Negara',
            'rumpun_id' => '3',
            'kelas' => '6',
            'nilai' => '900',
        ]);
    }
}
