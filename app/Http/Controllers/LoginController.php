<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postLogin(Request $request){
        $credentials = $request->only('username', 'password', 'akses');
        if(Auth::attempt($credentials)){
            return redirect('index')->with('success', 'Anda Berhasil Masuk');
        }

        return redirect('login')->with('failed', 'Username atau password salah');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
