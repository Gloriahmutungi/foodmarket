<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Session;

class ContactController extends Controller
{
    public function contact(){
      $title="Contact";
        return view('livedinner.contact',['title'=>$title]);
      }
    public function store(Request $request){
      $request->validate([
                'name' =>'required',
                'email' =>'required',
                'subject' =>'required',
                'message' =>'required'

      ]);
      $insert = [
                'name' =>$request->name,
                'email' =>$request->email,
                'subject' =>$request->subject,
                'message' =>$request->message
      ];
      $insert = Contact::create($insert);
      if($insert){
        Session::flash('success',"Message sent successfully");
                return redirect()->route('contact');
      }else{
        Session::flash('fail',"Unable to sent message");
        return redirect()->route('contact');
      }
      
    }
}
