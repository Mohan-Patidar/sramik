<?php

namespace App\Http\Controllers;
use Mail;
use App\Models\ContactUS;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use stdClass;



class FrontendController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function contact_us(){
        return view('front.contact');
    }

    public function post_contact_us(Request $request){
        var_dump($request->all());
        die;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required',
            'phone'=>'required'
            ]);
   
           ContactUS::create($request->all());
           Mail::send('emails.contactus',
        [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ], function($message) use ($request)
    {
       $message->from($request->get('email'));
       $message->to('patidarmohan59@gmail.com')->subject($request->get('subject'));
       return redirect()->back();
    });
       
    }
    public function work(){
        return view('front.work');
    }
    public function about(){
        return view('front.about');
    }

    public function business_register(){
        return view('razorpayViews');
    }
    public function account_save(Request $request){
        $data = $request->all();
        // var_dump($data);
        // die;
        // return User::create([
        //     'name' => $data['uname'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        // return Response()->json($data);
        return redirect()->route('personal_info');
    }
    public function personal_info(){
        
        return view('front.personal_info_step');
    }
    public function personal_info_save(Request $request){
        $data = $request->all();
        //  var_dump($data);
        // die;
        return view('front.payment');
    }
    

}
