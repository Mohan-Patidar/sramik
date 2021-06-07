<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->view('emails.contactus')->with([
           
            'name' => $this->request->name,
          
            // 'mobile'=>$this->request->number,
            'email'=>$this->request->email,
            'subject'=>$this->request->subject,
            'user_message'=>$this->request->user_message,
        ]); 
       
    }
}
