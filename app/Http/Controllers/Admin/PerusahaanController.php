<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    function index(){
        $data ['perusahaan'] = Perusahaan::all();
        return view('Admin.Perusahaan.index', $data);
    }

    function add(){
        return view('Admin.Perusahaan.create');
    }

    function create(Request $request){
        Perusahaan::create([
            'id_admin' => Auth::guard('admins')->user()->id_admin,
            'perusahaan' => $request->perusahaan,
            'kontak' => $request-> kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto'),
            'status' => $request->status
        ]);
        return redirect('perusahaan')->with('status','Berhasil Menambahkan Perusahaan!');
    }


    function edit($id){
        $data['perusahaan'] = Perusahaan::find($id);
        return view('Admin.Perusahaan.edit', $data);
    }

    function update(Request $request){
        $data = Perusahaan::where('id_perusahaan', $request->id_perusahaan)->first();
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
        } else {
            $foto = "-";
        }
        Perusahaan::where('id_perusahaan', $request->id)->update([
            'perusahaan' => $request->perusahaan,
            'kontak' => $request-> kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
            'status' => $request->status
            
        ]);
        return redirect('perusahaan')->with('status','Berhasil Mengubah Perusahaan!');
    }

    function delete($id){
        Perusahaan::where('id_perusahaan', $id)->delete();
        return redirect('perusahaan');
    }
}
