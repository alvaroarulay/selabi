<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function contact(Request $request){
      
        $subject = $request->subject;
        $for = "alvar_olp_1@hotmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from($request->email,$request->name);
            $msj->subject($subject);
            $msj->to($for);
        });
        return view('contacto');
    }
}
