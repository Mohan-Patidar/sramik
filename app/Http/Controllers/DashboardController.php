<?php

namespace App\Http\Controllers;
use App\Models\labour;
use App\Models\Farmer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
       $msg= "Welcome श्रमिक सेवा उपयोगकर्ता";
       
       $farmer = Farmer::get()->count();
      $labour = labour::get()->count();
       return view('admin.dashboard.index',compact("msg","farmer","labour"));
   }
}
