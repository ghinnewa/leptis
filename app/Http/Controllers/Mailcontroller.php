<?php

namespace App\Http\Controllers;

use App\Mail\testmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Mailcontroller extends Controller
{
   
    public function send(Request $data){
     
    //    dd($data->file('file')); 
        $details=[
            'title'=>$data->name
            ,'phone'=>$data->phone,
            'email'=>$data->email,
            'position'=>$data->position,
            'companyname'=>$data->companyname,
            'content'=>$data->course,
            'file'=>$data->file('file')->nullable
        ];
   
        Mail::send('email',['details'=>$details], function ($message)use($details) {
            $message->subject('liptis');
            $message->to('support@leptistraining.zendesk.com');
            $message->attach($details['file'],
            [
                'as' => $details['file']->getClientOriginalName(),
                'mime' =>$details['file']->getClientMimeType(),
            ]);  
        });
        // Mail::to('hajer.ghinnewah@gmail.com')->send(new testmail($details));
        return (redirect()->back());
        
    }
}
