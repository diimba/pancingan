<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{   
    public function index()
    {
        $user = Auth::id();
        // dd($user);
        $data = [
            'user_id' => $user
        ];
        return view('pages.home', $data);
    }
}
