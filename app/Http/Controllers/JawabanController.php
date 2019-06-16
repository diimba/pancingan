<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jawaban;
use App\Soal;
use App\Subtest;

class JawabanController extends Controller
{
    public function store(Request $request){
        $user_id = Auth::id();
        $soal_id = $request->soal_id;
        $jawaban = $request->jawaban;
        $subtest = $request->subtest;
        $nama_sub = $request->keterangan;
        $nomor = $request->nomor;
        $isAnswered = Jawaban::where("user_id", $user_id)
                            ->where("soal_id", $soal_id)
                            ->count() > 0 ? true : false;

        if($jawaban != null && !$isAnswered){
            $ins_jawaban = new Jawaban;
            $ins_jawaban->user_id = $user_id;
            $ins_jawaban->soal_id = $soal_id;
            $ins_jawaban->subtest_id = $subtest;
            $ins_jawaban->jawab = $jawaban;
            $ins_jawaban->save();
        }

        $nomor = $nomor + 1;
            if ($nomor > Soal::where('subtest_id', $subtest)->count()) {
                $nomor = 1;
                $subtest = $subtest + 1;
                if ($subtest > Subtest::all()->count()) {
                    return redirect()->route('hitung_hasil', ['user_id' => $user_id]); 
                }
            }     
        return redirect()->route('view_soal', ['subtest' => $subtest, 'nomor' => $nomor]);
    }
}
