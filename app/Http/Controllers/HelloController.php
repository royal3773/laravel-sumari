<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view('index');
    }
    public function top(){
        return view('top');
    }
    public function contact(){
        return view('contact');
    }
    public function introduction(){
        return view('introduction');
    }
    // public function store(Request $request){
    //     //$requestに入ってきたデータをcontactsテーブルのそれぞれのカラムに入れる処理
    //     $contact = new Contact();
    //     $contact->name = $request->input('name');
    //     $contact->age = $request->input('age');
    //     $contact->sex = $request->input('sex');
    //     $contact->text = $request->input('text');
    //     $contact->file  = $request->input('file');
        
    //     $contact->save();
    // }
    public function data(){
        $contacts = Contact::all();
        return view('data', ['contacts' => $contacts]);
    }
}
