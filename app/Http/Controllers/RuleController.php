<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hasil;
use App\User;
use App\Subtest;
use App\Rule;
use App\Jurusan;

class RuleController extends Controller
{
    public function forward_chaining (Request $request)
    {
        $userid = $request->user_id;        
        $pointer = 'R1';
        $arr_rule = Rule::all();
        $arr_jurusan = Jurusan::all();
        $arr_goal = null;
        $arr_hasil = User::find($userid)->r_hasil;
        $arr_nama_sub = Subtest::all();
        foreach ($arr_nama_sub as $nama) {
            $nama_sub[] = $nama->keterangan;
        }
        
        while (true) {
            $rule = $arr_rule->where('kode_rule', $pointer)->first();
            $sub_id = $rule->subtest_id;
            $goal = $rule->goal;
            $next = $arr_hasil->where('subtest_id', $sub_id)->first();
                // Pengecheckan Jika Yes
                if ($next->hasil >= 7) {      
                    if ($rule->yes == null){
                        break;
                    }
                    $pointer = $rule->yes;
                // Pengecheckan Jika No
                } else { 
                    if($rule->no == null){
                        break;
                    }
                    $pointer = $rule->no;
                }
            if ($goal != null) {
                $jurusan = $arr_jurusan->where('kode_goal', $goal)->first();
                $arr_goal []= ['kode' => $goal, 'nama' => $jurusan->nama_jurusan];
            }         
        }
        if (count($arr_goal) == 0) {
            $rekom = 'Kosong';
        }
        else {
            $rekom = $arr_goal;
        }
        $data = [
            'namas'   => $nama_sub,
            'hasils' => $arr_hasil,
            'rekoms' => $rekom
        ];
        //dd($nama_sub);
        return view('pages/hasil', $data);
    }
////////////////////////////// Atas  : Forward Chaining Original ////////////////////////////////////  
////////////////////////////// Bawah : Optimasi Forward Chaining dengan Rete Network ////////////////
    public function matching(Request $request){
        $userid = $request->user_id;
        $hasil_user = User::find($userid)->r_hasil;
        $arr_nama_sub = Subtest::all();
        foreach ($arr_nama_sub as $nama) {
            $nama_sub[] = $nama->keterangan;
        }

        $beta_node = [];
        $hasil_node = [];
        
        // Mengambil fakta dari hasil tes yang sesuai dengan syarat
        foreach (User::find($userid)->r_hasil as $arr_hasil) {
        // Jika nilai subtest lebih besar dari 9 
        // maka subtest menjadi Fakta yang akan dimasukkan pada alpha memory
            if ($arr_hasil->hasil >= 9){ 
                array_push($hasil_node, [
                    'subtest' => $arr_hasil->subtest_id,
                    'hasil' => true
                ]);
        // Jika dibawah dari 9 
        // maka subtest ditidak akan dimasukkan pada alpha memory
            } else {
                array_push($hasil_node, [
                    'subtest' => $arr_hasil->subtest_id,
                    'hasil' => false
                ]);
            }
        }
        // Forward Chaining dan Rete
        $goal = [];
        for ($i=0; $i < count($hasil_node); $i++) { 
            // Alpha node
            if($hasil_node[$i]['hasil'] == true){
                // Memasukkan beta node
                array_push($beta_node, $hasil_node[$i]['subtest']);
                // Melakukan pengecheckan goal
                $tempGoal = $this->checkGoal($beta_node);
                if($tempGoal != null && (!in_array($tempGoal, $goal))){
                    array_push($goal, $tempGoal);
                }                   
            }
        }
        // Melihat isi node goal setelah proses inferensi selesai    
        //dd($goal);

        // Mengambil goal paling akhir dari array variable $goals 
        foreach (end($goal) as $value) {
           $pointer = Jurusan::where("kode_goal", $value)->first();
           //dd($pointer);
           $end_goal [] = ['nama' => $pointer->nama_jurusan]; 
        }

        // Jika pada varibale goal tidak ditemukan goal maka rekom akan mengeluarkan kosong
        if (count($goal) == 0) {
            $rekom = 'Kosong';
        }
        else {
            $rekom = $end_goal;
        }

        $data = [
            'user_id' => $userid,
            'namas'   => $nama_sub,
            'hasils' => $hasil_user,
            'rekoms' => $rekom
        ];

        //Melihat isi rekomendasi 
        //dd($rekom);
        return view('pages/hasil', $data);
    }
    
    function checkGoal($array)
    {
        $ruleses = [];
        $hasil = [];
        $countRule = 0;
        // Fungsi untuk memecah string
        $query = implode(",",$array);
        $rule = Rule::all();

        foreach ($rule as $key => $value) {
            array_push($ruleses, [
                'rule' => explode( ',', $value->if),
                'goal' => $value->goal
            ]);
        }

        for ($j=0; $j < count($ruleses); $j++) { 
            for ($i=0; $i < count($array); $i++) { 
                if((in_array($array[$i], $ruleses[$j]['rule']))){
                    $countRule = $countRule + 1;
                    if($countRule == count($ruleses[$j]['rule'])){
                        array_push($hasil, $ruleses[$j]['goal']);
                        $countRule = 0;
                    }
                }
            }
            $countRule = 0;
        }
        return $hasil;
    }
}