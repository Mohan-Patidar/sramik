<?php

namespace App\Http\Controllers;

use App\Models\ContactUS;
use Illuminate\Http\Request;
use Session;
use Mail;

class ContactUsController extends Controller
{
    public function contactUS()
    {
        return view('welcome');
    }

    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'subject'=>'required',
         'message' => 'required'
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
    });
  
     return back()->with('success', 'Thanks for contacting us!'); 
    }
}
