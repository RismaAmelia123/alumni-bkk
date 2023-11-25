<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    function index(){
        $data ['gallery'] = Gallery::all();
        return view('Admin.gallery.index', $data);
    }

    function add(){
        return view('Admin.gallery.create');
    }

    function create(Request $request){
        Gallery::create([
            'gallery' => $request->file('gallery')->store('foto'),

        ]);
        return redirect('gallery')->with('status','Berhasil Menambahkan Gallery!');
    }

    function edit($id){
        $data ['gallery'] = Gallery::find($id);
        return view('Admin.gallery.edit', $data);
    }

    function update(Request $request){
        Gallery::where('id_gallery', $request->id)->update([
            'gallery' => $request->file('gallery')->store('foto'),

        ]);
        return redirect('gallery')->with('status','Berhasil Mengubah Gallery!');
    }

    function delete($id){
        Gallery::where('id_gallery', $id)->delete();
        return redirect('gallery');
    }
}
