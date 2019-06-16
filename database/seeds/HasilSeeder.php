<?php

use Illuminate\Database\Seeder;
use App\Hasil;

class HasilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_hasils = [
            [// USER NO 1
                [
                    
                    'hasil'        =>   '8',
                    'ket'          =>   'Kurang Baik',
                ],
                [
                    
                    'hasil'        =>   '7',
                    'ket'          =>   'Kurang Baik',
                ],
                [
                    
                    'hasil'        =>   '12',
                    'ket'          =>   'Cukup Baik',
                ],
                [
                    
                    'hasil'        =>   '10',
                    'ket'          =>   'Cukup Baik',
                ],
                [
                    
                    'hasil'        =>   '7',
                    'ket'          =>   'Kurang Baik',
                ],
                [
                    
                    'hasil'        =>   '8',
                    'ket'          =>   'Kurang Baik',
                ],
                [
                    
                    'hasil'        =>   '10',
                    'ket'          =>   'Cukup Baik',
                ],
                [
                    
                    'hasil'        =>   '11',
                    'ket'          =>   'Cukup Baik',
                ],
                [
                    
                    'hasil'        =>   '5',
                    'ket'          =>   'Kurang Baik',
                ],
            ],
            // [ // USER NO 2
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '17',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 3
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '4',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 4
            //     [
                    
            //         'hasil'        =>   '3',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 5
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 6
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '18',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 7
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '18',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '19',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 8
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '3',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '5',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 9
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '18',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 10
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '5',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '4',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '19',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '5',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 11
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 12
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '5',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '5',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 13
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 14
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 15
            //     [
                    
            //         'hasil'        =>   '17',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '5',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 16
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 17
            //     [
                    
            //         'hasil'        =>   '3',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '17',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 18
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 19
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 20
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 21
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '5',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '4',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 22
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 23
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '17',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 24
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 25
            //     [
                    
            //         'hasil'        =>   '4',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 26
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '17',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '19',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '17',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 27
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 28
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '15',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '17',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 29
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '14',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 30
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '7',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '6',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 31
            //     [
                    
            //         'hasil'        =>   '16',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
            // [ // USER NO 32
            //     [
                    
            //         'hasil'        =>   '9',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '8',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '10',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '18',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '12',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '13',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            //     [
                    
            //         'hasil'        =>   '11',
            //         'ket'          =>   'Kurang Baik/Cukup Baik/Baik',
            //     ],
            // ],
        ];

        for ($i=0; $i < count($arr_hasils); $i++) { // Loop user_id 
            for ($j=0; $j < count($arr_hasils[$i]); $j++) { // Loop hasil
                $hasil = new Hasil;
                $hasil->user_id = $i+1;
                $hasil->subtest_id = $j+1;   
                $hasil->hasil = $arr_hasils[$i][$j]['hasil'];
                $hasil->keterangan = $arr_hasils[$i][$j]['ket'];
                $hasil->timestamps = false;
                $hasil->save();
            }
        }
    }
}
