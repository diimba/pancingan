<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$arr_users=[
        [
            'nama' => 'Riri Dwi Setyawati Jatiningtyas',
            'email' => 'riri.setyawati17@gmail.com',
            'password' => Hash::make('riri17'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '082234963378',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Reynaldi Zuan F S',
            'email' => 'renaldizfs1@gmail.com',
            'password' => Hash::make('reynaldi1'),
            'jenis_kel' => 'Laki-Laki',
            'no_tlp' => '085855786293',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Lucky Fernanda Setiawan',
            'email' => 'luckyfernandasetiawan3@gmail.com',
            'password' => Hash::make('ferr191'),
            'jenis_kel' => 'Laki laki',
            'no_tlp' => '085649694977',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Nur Karimah',
            'email' => 'nurkarimah278@gmail.com',
            'password' => Hash::make('nukarim'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '085855965038',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Alif Fatur Rochman',
            'email' => 'aliffaturrochman1@gmail.com',
            'password' => Hash::make('fatur01'),
            'jenis_kel' => 'Laki-laki',
            'no_tlp' => '085804499707',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Bryantoro Prasetyo Nugroho',
            'email' => 'Bryan9b09.sooko1@gmail.com',
            'password' => Hash::make('bryan09'),
            'jenis_kel' => 'Laki-laki',
            'no_tlp' => '082336568700',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Dimas Fernanda Bagus Dwi Prasityo',
            'email' => 'nanda.prassetya024@gmail.com',
            'password' => Hash::make('nanda024'),
            'jenis_kel' => 'Laki-laki',
            'no_tlp' => '082234684448',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Hilda Zulvia Karim',
            'email' => 'hildazulfia9b19.sooko1@gmail.com',
            'password' => Hash::make('hildazul191'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '085708834355',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Wahyu Arrofiq',
            'email' => 'wahyu.arrofiqac@gmail.com',
            'password' => Hash::make('arrofiqwah'),
            'jenis_kel' => 'Laki laki',
            'no_tlp' => '085707425461',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Ifara Kumala Sari',
            'email' => 'varavara800@gmail.com',
            'password' => Hash::make('vara800'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '08563333981',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Anditha Jasmine Noor Aurum',
            'email' => 'nandithajasmine17@yahoo.com',
            'password' => Hash::make('jasmine17'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '085775500822',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Febtira Yusmita Pratama',
            'email' => 'Firachma01@gmail.com',
            'password' => Hash::make('firacham01'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '081233972236',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Khoirunnisa Nurul Fadhilah',
            'email' => 'nisafadhila46@yahoo.com',
            'password' => Hash::make('nisaa20'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '082245973417',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Firma Aryani',
            'email' => 'Firmaariani1201@gmail.com',
            'password' => Hash::make('ariani123'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '085735550267',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Rania Aznam',
            'email' => 'raniazznam@gmail.com',
            'password' => Hash::make('zanam342'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '082233588865',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
        [
            'nama' => 'Syifaul Kamelia',
            'email' => 'syifaulkamelia8@gmail.com',
            'password' => Hash::make('syunhuoo'),
            'jenis_kel' => 'Perempuan',
            'no_tlp' => '085606122646',
            'asal_sek' => 'SMAN 1 PURI', 
        ],
    ];
        
        foreach ($arr_users as $arr_user) {
            $user = new User;
            $user->name = $arr_user['nama'];
            $user->email = $arr_user['email'];
            $user->password = $arr_user['password'];
            $user->jenis_kelamin = $arr_user['jenis_kel'];
            $user->no_tlf = $arr_user['no_tlp'];
            $user->asal_sekolah = $arr_user['asal_sek'];
            $user->timestamps = false;
            $user->save();
        }
    }
}