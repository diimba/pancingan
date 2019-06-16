<?php

use Illuminate\Database\Seeder;
use App\Subtest;

class SubtestSeeder extends Seeder
{
    /**
     * 
     *
     * @return void
     */
    public function run()
    {
        
        $arr_subtests = [
            [
                'kode'  => 'F1',
                'nama'  => 'SE',
                'ket'   => 'Melengkapi Kalimat'
            ],
            [
                'kode'  => 'F2',
                'nama' => 'WA',
                'ket' => 'Mencari kata berbeda'
            ],
            [
                'kode'  => 'F3',
                'nama' => 'AN',
                'ket' => 'Mencari hubungan kata'
            ],
            [
                'kode'  => 'F4',
                'nama' => 'GE',
                'ket' => 'Mencari kata yang mencakup dua pengertian'
            ],
            [
                'kode'  => 'F5',
                'nama' => 'RA',
                'ket' => 'Hitungan sederhana'
            ],
            [
                'kode'  => 'F6',
                'nama' => 'ZR',
                'ket' => 'Deret angka'
            ],
            [
                'kode'  => 'F7',
                'nama' => 'FA',
                'ket' => 'Menyusun bentuk'
            ],
            [
                'kode'  => 'F8',
                'nama' => 'WU',
                'ket' => 'Mencocokan kubus'
            ],
            [
                'kode'  => 'F9',
                'nama' => 'ME',
                'ket' => 'Mengingat kata'
            ],
        ];

        foreach ($arr_subtests as $arr_subtest) {
            $subtest = new Subtest;
            $subtest->kode_fakta = $arr_subtest['kode'];
            $subtest->nama_sub = $arr_subtest['nama'];
            $subtest->keterangan = $arr_subtest['ket'];
            $subtest->timestamps = false;
            $subtest->save();
        }
    }
}
