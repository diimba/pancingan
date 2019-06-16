<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Soal;
use App\Subtest;
use App\Jawaban;
use App\User;
use Carbon\Carbon;

class SoalController extends Controller
{
    public function index(Request $request){
       
        $subtest = $request->subtest;
        $nomor = $request->nomor;
        $sub = Subtest::find($subtest);
        $popup = null;

        if ($nomor == 1){
            $popup = $sub->popup;
        }

        // 72 menit
        $user = Auth::user();
        
        if(!$user->end_time){
            $now = Carbon::now('Asia/Jakarta')->toDateTimeString();
            $user->start_time = $now;
            $user->end_time = Carbon::createFromFormat('Y-m-d H:i:s', $now)->addMinutes(72);
            $user->save();
        }

        $soal = Subtest::find($subtest)->soals()->where('nomor', $nomor)->first();
        $isAnswered = Jawaban::where("user_id", $user->id)
                            ->where("soal_id", $soal->id)
                            ->count() > 0 ? true : false;

        $data = [
            'user_id' => $user->id,
            'soal' => $soal,
            'subtest' => $subtest,
            'nama_sub' => $sub->keterangan,
            'popup_sub' => $popup,
            'isAnswered' => $isAnswered,
            'endTime' => $user->end_time
        ];

        return view('test/soal', $data);

    }
}
