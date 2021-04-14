<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function top()
    {
        return view('contents.top');
    }
    public function introduction()
    {
        return view('contents.introduction');
    }
    public function test()
    {
        return view('contents.test');
    }
}
