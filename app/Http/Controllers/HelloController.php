<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function top(){
        return view('top');
    }
    public function contact(){
        return view('contact');
    }
    public function introduction(){
        return view('introduction');
    }
}
