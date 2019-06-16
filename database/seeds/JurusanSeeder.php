<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_jurusan = [
            [
                'kode'  => 'G1',
                'nama'  => 'Ilmu Hukum',
                'detil' => '', 
            ],
            [   
                'kode'  => 'G2',
                'nama'  => 'Ilmu Komunikasi Sosial dan Ilmu Politik',
                'detil' => '',
            ],
            [
                'kode'  => 'G3', 
                'nama'  => 'Ilmu Ekonomi',
                'detil' => '',
            ],
            [
                'kode'  => 'G4',
                'nama'  => 'Ilmu Bahasa dan Sastra',
                'detil' => '',
            ],
            [
                'kode'  => 'G5',
                'nama'  => 'Psikologi',
                'detil' => '',
            ],
            [
                'kode'  => 'G6',
                'nama'  => 'Ilmu Kedokteran',
                'detil' => '',
            ],
            [
                'kode'  => 'G7',
                'nama'  => 'Pertanian',
                'detil' => '',
            ],
            [
                'kode'  => 'G8',
                'nama'  => 'Peternakan, Perikanan',
                'detil' => '',
            ],
            [
                'kode'  => 'G9',
                'nama'  => 'Arsitektur, Desain Komunikasi Visual, Seni',
                'detil' => '',
            ],
            [
                'kode'  => 'G10',
                'nama'  => 'Teknik Industri, Kimia, Informatika, Sipil',
                'detil' => '',
            ],
            [
                'kode'  => 'G11',
                'nama'  => 'Statistika, MIPA',
                'detil' => '',
            ]  
        ];

        foreach ($arr_jurusan as $arr_jurusans) {
            $jurusan = new Jurusan;
            $jurusan->kode_goal = $arr_jurusans['kode'];
            $jurusan->nama_jurusan = $arr_jurusans['nama'];
            $jurusan->detail = $arr_jurusans['detil'];
            $jurusan->timestamps = false;
            $jurusan->save();
        }
    }
}
