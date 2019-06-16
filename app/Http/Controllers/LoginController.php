<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('pages.login');
    }

    public function register(Request $request)
    {
        $nama = $request->nama;
        $email = $request->email;
        $pass = $request->password;
        $jk = $request->jk;
        $nomor = $request->nomor;
        $asal = $request->asal;

        $insRegis = new User;
        $insRegis->name = $nama;
        $insRegis->email = $email;
        $insRegis->password = bcrypt($pass); 
        $insRegis->jenis_kelamin = $jk; 
        $insRegis->no_tlf = $nomor; 
        $insRegis->asal_sekolah = $asal; 
        $insRegis->save();

        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //dd($credentials);
        if (Auth::attempt($credentials)){
            $user_id = Auth::id();
            return redirect()->route('home', ['user_id' => $user_id]);
        }
        else {
            return view('pages.login');
        }   
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }   
}
