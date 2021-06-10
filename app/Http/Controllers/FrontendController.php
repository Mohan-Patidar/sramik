<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function contact(){
        return view('front.contact');
    }
    public function work(){
        return view('front.work');
    }
    public function about(){
        return view('front.about');
    }

}
