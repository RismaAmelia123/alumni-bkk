<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    function index(){
        $data ['alumni'] = Alumni::all();
        return view('Admin.Alumni.index', $data);
    }

    function add(){
        return view('Admin.Alumni.create');
    }

    function create(Request $request){
        if ($request->file('ktp')) {
            $data ['ktp'] = $request->file('ktp')->store('foto');
        }
        if ($request->file('ijazah_pendidikan')) {
            $data ['ijazah_pendidikan'] = $request->file('ijazah_pendidikan')->store('foto');
        }
        if ($request->file('transkrip_nilai')) {
            $data ['transkrip_nilai'] = $request->file('transkrip_nilai')->store('foto');
        }
        if ($request->file('skck')) {
            $data ['skck'] = $request->file('skck')->store('foto');
        }
        if ($request->file('kartu_kuning')) {
            $data ['kartu_kuning'] = $request->file('kartu_kuning')->store('foto');
        }
        if ($request->file('sks')) {
            $data ['sks'] = $request->file('sks')->store('foto');
        }
        if ($request->file('foto')) {
            $data ['foto'] = $request->file('foto')->store('foto');
        }
        Alumni::create([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama_alumni' => $request->nama_alumni,
            'ktp' => $data['ktp'] ?? '',
            'ijazah_pendidikan' => $data['ijazah_pendidikan'] ?? '',
            'transkrip_nilai' => $data['transkrip_nilai'] ?? '',
            'skck' => $data['skck'] ?? '',
            'kartu_kuning' => $data['kartu_kuning'] ?? '',
            'sks' => $data['sks'] ?? '',
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'foto' => $data['foto'] ?? '',
            'thn_angkatan' => $request->thn_angkatan,
            'password' => bcrypt($request->password)
        ]);
        return redirect('alumni')->with('status','Berhasil Menambahkan Alumni!');
    }

    function delete($id){
        Alumni::where('nisn', $id)->delete();
        return redirect ('alumni');
    }

    function detail($id){
        $data ['alumni'] = Alumni::find($id);
        return view('Admin.Alumni.detail', $data);
    }
}