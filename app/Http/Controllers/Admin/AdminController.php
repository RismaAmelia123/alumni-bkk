<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;

class AdminController extends Controller
{
    function index(){
        $data ['admin'] = Admin::all();
        return view('Admin.Admin.index', $data);
    }

    function add(){
        return view('Admin.Admin.create');
    }

    function create(Request $request){
        Admin::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'kontak' => $request->kontak,
            'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect('admin')->with('status','Berhasil Menambahkan Admin!');
    }

    function edit($id){
        $data['admin'] = Admin::find($id);
        return view ('Admin.Admin.edit', $data);
    }

    function update(Request $request){
        $data = Admin::where('id_admin', $request->id_admin)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
        if($request->password == ''){
            $password = $data->password;
        }else{
            $password = bcrypt($request->password);
        }
        Admin::where('id_admin', $request->id)->update([
            'password' => $password,
            'nama' => $request->nama,
            'email' => $request->email,
            'kontak' => $request->kontak,
            'foto' => $foto
        ]);
        return redirect('admin');
    }

    function delete($id){
        Admin::where('id_admin', $id)->delete();
        return redirect('admin');
    }

    function login(){
        return view('Admin.login');
    }

    function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if(Auth::guard('admins')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('dashboard');
        }else{
            return redirect()->back()->with(['pesan' => 'Akun tidak terdaftar!']);
        }
    }

    function logout(){
        Auth::guard('admins')->logout();
        return redirect('login');
    }
}