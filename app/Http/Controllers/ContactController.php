<?php

namespace App\Http\Controllers;

use App\Mail\mailFromViewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
    }


    public function contact_submit(Request $request){
        
        $data = $request->validate([
            'email' => 'email|required',
            'subject' => 'string|required',
            'message' => 'string|required'
        ]);

        Mail::to('mahadirzb@gmail.com')
            ->send(new mailFromViewer($data));

        return view('contact-thanks-message');
    }


}
