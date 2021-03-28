<?php

namespace App\Http\Controllers;

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
    public function store(Request $request){
        dump($request->name);
        dump($request->sex);
        dump($request->text);
        dd($request->age);
    }
    public function data(){
        return view('data');
    }
}
