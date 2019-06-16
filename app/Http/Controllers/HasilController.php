<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use App\Soal;
use App\Subtest;
use App\User;
use App\Hasil;

class HasilController extends Controller
{
   public function hitung(Request $request) {

        $userid = $request->user_id;
        
        $jawaban = User::find($userid)->r_jawaban;
        $soals = Soal::all();
        $hasils = User::find($userid)->r_hasil;

        
        foreach (Subtest::all() as $subtest) {
            $hasil = 0;
            foreach ($jawaban->where('subtest_id', $subtest->id) as $j) {
                $soal = $soals->find($j->soal_id);
                if ($j->jawab == $soal->kunci){
                    $hasil++;
                }
            }
            if ($hasil == 0) {
                $ket = "Kurang Baik";
            } elseif ($hasil >= 1 || $hasil <= 8) {
                $ket = "Kurang Baik";
            } elseif ($hasil >= 9 || $hasil <= 14) {
                $ket = "Cukup Baik";                
            } elseif ($hasil >= 15 || $hasil <= 20) {
                $ket = "Baik";                                
            }
            $ins_hasil = new Hasil;
            $ins_hasil->user_id = $userid;
            $ins_hasil->subtest_id = $subtest->id;
            $ins_hasil->hasil = $hasil;
            $ins_hasil->keterangan = $ket;
            $ins_hasil->save();
        }

        return redirect()->route('working_mem', ['user_id' => $userid]);

        //dd($hasils);
   }

   public function hasil(){
       
   }
}
