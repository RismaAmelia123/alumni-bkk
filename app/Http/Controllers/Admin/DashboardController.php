<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Alumni;
use App\Models\Perusahaan;
use App\Models\Lowongan;
use App\Models\Lamaran;

class DashboardController extends Controller
{
    function index(){
        $data ['alumni'] = Alumni::all()->count();
        $data ['perusahaan'] = Perusahaan::where('status','=','Posting')->count();
        $data ['lowongan'] = Lowongan::where('status','=','Posting')->count();
        $data ['lamaran'] = Lamaran::all()->count();
        $data ['lamar'] = Lamaran::orderBy('id_lamaran', 'desc')->paginate(6);
        $data ['loker'] = Lowongan::orderBy('id_lowongan', 'desc')->where('status','=','Posting')->paginate(6);
        $data ['perusahaan1'] = Perusahaan::orderBy('id_perusahaan', 'desc')->where('status','=','Posting')->paginate(6);
        return view('Admin.Dashboard.dashboard', $data);
    }

    function profile(){
        $data ['admin'] = Admin::where('id_admin', Auth()->guard('admins')->id())->get();
        return view('Admin.profile',$data);
    }
    
    function profile_update(Request $request){
        $data = Admin::where('id_admin', $request->id_admin)->first();
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
        } else {
            $foto = "-";
        }
        Admin::where('id_admin', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $password,
            'kontak' => $request->kontak,
            'foto' => $foto
        ]);
        return redirect('dashboard');
    }
}
