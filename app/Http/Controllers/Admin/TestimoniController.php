<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimoni;
class TestimoniController extends Controller
{
    function index(){
        $data ['testimoni'] = Testimoni::orderBy('id_testimoni', 'desc')->get();
        return view('Admin.Testimoni.index', $data);
    }

    function delete($id){
        Testimoni::where('id_testimoni', $id)->delete();
        return redirect('testimoni');
    }
}
