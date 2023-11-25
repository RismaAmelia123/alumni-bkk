<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lowongan;
use App\Models\Alumni;
use App\Models\Admin;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;

class LowonganController extends Controller
{
    function index(){
        $data ['lowongan'] = Lowongan::all();
        return view('Admin.Lowongan.index', $data);
    }

    function add(){
        $data ['perusahaan'] = Perusahaan::where('status', '=','Posting')->get();
        return view('Admin.Lowongan.create', $data);
    }

    function create(Request $request){
        Lowongan::create([
            'id_admin' => Auth::guard('admins')->user()->id_admin,
            'id_perusahaan' => $request->id_perusahaan,
            'lowongan' => $request->lowongan,
            'syarat' => $request->syarat,
            'keahlian' =>$request->keahlian,
            'kualifikasi' => $request->kualifikasi,
            'gaji' => $request->gaji,
            'jam_kerja' => $request->jam_kerja,
            'pendidikan' => $request->pendidikan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'tgl_post' => date('Y-m-d'),
            'tgl_akhir' => $request->tgl_akhir,
            'status' => $request->status
        ]);
        return redirect('lowongan')->with('status','Berhasil Menambahkan Lowongan Pekerjaan!');
    }
    
    function edit($id){
        $data['lowongan'] = Lowongan::find($id);
        $data['perusahaan'] = Perusahaan::all();
        return view('Admin.Lowongan.edit', $data);
    }

    function update(Request $request){
        Lowongan::where('id_lowongan', $request->id)->update([
            'id_perusahaan' => $request->id_perusahaan,
            'lowongan' => $request->lowongan,
            'syarat' => $request->syarat,
            'keahlian' =>$request->keahlian,
            'kualifikasi' => $request->kualifikasi,
            'gaji' => $request->gaji,
            'pendidikan' => $request->pendidikan,
            'tipe_pekerjaan' => $request->tipe_pekerjaan,
            'tgl_post' => date('Y-m-d'),
            'tgl_akhir' => $request->tgl_akhir,
            'status' => $request->status
        ]);
        return redirect('lowongan')->with('status','Berhasil Mengubah Lowongan Pekerjaan!');
    }

    function delete($id){
        Lowongan::where('id_lowongan', $id)->delete();
        return redirect('lowongan');
    }

    function detail($id){
        $data['lowongan'] = Lowongan::find($id);
        return view('Admin.Lowongan.detail', $data);
    }
}
