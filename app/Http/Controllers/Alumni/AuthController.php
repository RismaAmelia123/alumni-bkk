<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Alumni;

class AuthController extends Controller
{
    function login(){
        return view('Alumni.login');
    }

    function auth(Request $request){
        $credentials = $request->validate([
            'nisn' => ['required'],
            'password' => ['required']
        ]);
        if(Auth::guard('alumnis')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');

            
        }else{
            return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar!']);
        }
    }

    function logout_alumni(){
        Auth::guard('alumnis')->logout();
        return redirect('/');
    }
}
