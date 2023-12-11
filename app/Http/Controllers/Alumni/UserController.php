<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Perusahaan;
use App\Models\Lowongan;
use App\Models\Lamaran;
use App\Models\Alumni;
use App\Models\Testimoni;
use App\Models\Gallery;
use App\Models\Contact;
class UserController extends Controller
{
    function landing_page(){
        $data ['lowongan'] = Lowongan::where('status', '=','Posting')->paginate(6);
        $data ['perusahaan'] = Perusahaan::where('status', '=','Posting')->paginate(6);
        $data ['testimoni'] = Testimoni::all();
        $data ['gallery'] = Gallery::orderBy('id_gallery', 'desc')->paginate(8);
        return view('Alumni.Landing-page.index', $data);
    }

    function loker(){
        $data ['lowongan'] = Lowongan::where('status', '=','Posting')->get();
        return view('Alumni.Pengajuan-loker.index', $data);
    }
    
    function add_loker(Request $request){
        $data ['perusahaan'] = Perusahaan::where('status', '=','Posting')->get();
        return view('Alumni.Pengajuan-loker.pengajuan-loker', $data);
    }

    function create_loker(Request $request){
        Lowongan::create([
            'nisn' => Auth::guard('alumnis')->user()->nisn,
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
            'status' => '0'
        ]);
        return redirect('riwayat/lowongan')->with('status','Berhasil Mengajukan Lowongan Pekerjaan!');
    }

    function delete_loker($id){
        Lowongan::where('id_lowongan', $id)->delete();
        return redirect('riwayat/lowongan');
    }

    function detail($id){
        $data ['lowongan'] = Lowongan::find($id);
        return view('Alumni.Pengajuan-loker.detail', $data);
    }

    function add_lamaran($id){
        $data ['lowongan'] = Lowongan::find($id);
        $data ['alumni'] = Alumni::where('nisn', Auth()->guard('alumnis')->id())->get();
        return view('Alumni.Lamaran.lamaran', $data);
    }

    function create_lamaran(Request $request){
        Lamaran::where('id_lamaran', $request->id)->create([
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'id_lowongan' => $request->id_lowongan,
            'surat_lamaran' => $request->file('surat_lamaran')->store('foto'),
            'cv' => $request->file('cv')->store('foto')
        ]);
        return redirect('loker')->with('status','Berhasil Menambahkan Lamaran!');
    }
    
    function riwayat($siapa = ''){
        $perusahaan = Perusahaan::orderBy('id_perusahaan', 'desc')->where('nisn', Auth()->guard('alumnis')->id())->get();
        return view('Alumni.riwayat', ['perusahaan' => $perusahaan, 'siapa' => $siapa]);
    }

    function riwayat_lowongan($siapa = ''){
        $lowongan = Lowongan::orderBy('id_lowongan', 'desc')->where('nisn', Auth()->guard('alumnis')->id())->get();
        // if ($siapa == 'me'){
        //    $lowongan = Lowongan::where('nisn', Auth::guard('alumnis')->user()->nisn)->get();
        // return view('Alumni.riwayat_alumni', ['lowongan' => $lowongan, 'siapa' => $siapa]);
        // }else{
        // $lowongan = Lowongan::where([['nisn', '!=', Auth::guard('alumnis')->user()->nisn]])->get();
        // }
        return view('Alumni.riwayat_alumni', ['lowongan' => $lowongan, 'siapa' => $siapa]);
    }

    function profile(){
        $data ['alumni'] = Alumni::where('nisn', Auth()->guard('alumnis')->id())->get();
        return view('Alumni.profile',$data);
    }

    function profile_update(Request $request){
        $data = Alumni::where('nisn', $request->nisn)->first();
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
        if($request->ktp == ''){
            $ktp = $data->ktp;
        }else{
            $ktp = $request->file('ktp')->store('foto');
        }
        if($request->ijazah_pendidikan == ''){
            $ijazah_pendidikan = $data->ijazah_pendidikan;
        }else{
            $ijazah_pendidikan = $request->file('ijazah_pendidikan')->store('foto');
        }
        if($request->transkrip_nilai == ''){
            $transkrip_nilai = $data->transkrip_nilai;
        }else{
            $transkrip_nilai = request->file('transkrip_nilai')->store('foto');
        }
        if($request->skck == ''){
            $skck = $data->skck;
        }else{
            $skck = $request->file('skck')->store('foto');
        }
        if($request->kartu_kuning == ''){
            $kartu_kuning = $data->kartu_kuning;
        }else{
            $kartu_kuning = $request->file('kartu_kuning')->store('foto');
        }
        if($request->sks == ''){
            $sks = $data->sks;
        }else{
            $sks = $request->file('sks')->store('foto');
        }
        Alumni::where('nisn', $request->id)->update([
            'nisn' => $request->nisn,
            'nis' => $request->nis,
            'nama_alumni' => $request->nama_alumni,
            'ktp' => $ktp,
            'ijazah_pendidikan' => $ijazah_pendidikan,
            'transkrip_nilai' => $transkrip_nilai,
            'skck' => $skck,
            'kartu_kuning' => $kartu_kuning,
            'sks' => $sks,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'foto' => $foto,
            'thn_angkatan' => $request->thn_angkatan,
            'password' => $password
        ]);
        return redirect('profile/alumni')->with('status','Berhasil Mengubah Profile!');
    }

    function perusahaan(){
        $data ['perusahaan'] = Perusahaan::where('status', '=','Posting')->get();
        return view('Alumni.Perusahaan.index', $data);
    }

    function add_perusahaan(){
        return view('Alumni.Perusahaan.create');
    }

    function create_perusahaan(Request $request){
        Perusahaan::create([
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'perusahaan' => $request->perusahaan,
            'kontak' => $request-> kontak,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto'),
            'status' => '0'
        ]);
        return redirect('riwayat')->with('status','Berhasil Mengajukan Perusahaan!');
    }

    function delete_perusahaan($id){
        Perusahaan::where('id_perusahaan', $id)->delete();
        return redirect('riwayat');
    }

    function testimoni($siapa = ''){
        $testimoni = Testimoni::where('nisn', Auth()->guard('alumnis')->id())->get();
        return view('Alumni.Testimoni.testimoni', ['testimoni' => $testimoni, 'siapa' => $siapa]);
    }

    function add_testimoni($id){
        $data ['lowongan'] = Lowongan::find($id);
        return view('Alumni.Testimoni.create',$data);
    }

    function create_testimoni(Request $request){

        Testimoni::where('id_testimoni', $request->id)->create([
            'id_lowongan' => $request->id_lowongan,
            'nisn' => Auth::guard('alumnis')->user()->nisn,
            'testimoni' => $request->testimoni
        ]);
        return redirect('loker')->with('status','Berhasil Menambahkan Testimoni!');
    }

    function index(){
        $data ['contact'] = Contact::all();
        return view('Admin.Contact.index',$data);
    }
    function add(){
        $data = [
            'name' => '',
            'email' => '',
            'message' => '',
        ];
        return view('Alumni.Landing-page.index',$data);
    }
    function create(Request $request){
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' =>$request->message
        ]);
        return redirect('/');
    }
    function delete($id){
        Contact::where('id_contact',$id)->delete();
        return redirect('contact');
    }
}
