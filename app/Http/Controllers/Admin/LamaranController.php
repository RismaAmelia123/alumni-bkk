<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\Alumni;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    function index(){
        $data ['lamaran'] = Lamaran::all();
        return view('Admin.Lamaran.index', $data);
    }

    function detail($id){
        $data['lamaran'] = Lamaran::find($id);
        return view('Admin.Lamaran.detail', $data);
    }

    function add(){
        $data ['lowongan'] = Lowongan::all();
        $data ['alumni'] = Alumni::all();
        return view('Admin.Lamaran.create', $data);
    }

    function create(Request $request){
        Lamaran::create([
            'id_admin' => Auth::guard('admins')->user()->id_admin,
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'id_lowongan' => $request->id_lowongan,
            'surat_lamaran' => $request->file('surat_lamaran')->store('foto'),
            'cv' => $request->file('cv')->store('foto'),
        ]);
        return redirect('lamaran')->with('status','Berhasil Menambahkan Lamaran!');
    }

    function edit($id){
        $data ['lamaran'] = Lamaran::find($id);
        $data ['lowongan'] = Lowongan::all();
        $data ['alumni'] = Alumni::all();
        return view('Admin.Lamaran.edit', $data);
    }

    function update(Request $request){
        Lamaran::where('id_lamaran', $request->id)->update([
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'id_lowongan' => $request->id_lowongan,
            'surat_lamaran' => $request->file('surat_lamaran')->store('foto'),
            'cv' => $request->file('cv')->store('foto'),
        ]);
        return redirect('lamaran')->with('status','Berhasil Mengubah Lamaran!');
    }

    function delete($id){
        Lamaran::where('id_lamaran', $id)->delete();
        return redirect('lamaran');
    }
}
