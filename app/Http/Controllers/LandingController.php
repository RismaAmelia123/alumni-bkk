<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class LandingController extends Controller
{
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
