<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Session;
use Hash;
use Illuminate\Support\Str;
use Mail;
use Carbon\Carbon;
use DateTime;

class ReservationController extends Controller
{
    public function reservation(){
        $title ="Reservations";
        return view('livedinner.reservation',['title'=>$title]);
      }
      public function store(Request $request){
        $request ->validate([
                             'reservation_date'=>'required',
                             'reservation_time'=>'required',
                             'nameof_persons'=>'required',
                             'name'=>'required',
                             'email'=>'required',
                             'phone'=>'required'
        ]);
        $insert=Reservation::create([
                            'reservation_date' => $request->reservation_date,
                            'reservation_time'=>$request->reservation_time,
                            'nameof_persons'=>$request->nameof_persons,
                            'name'=>$request->name,
                            'email'=>$request->email,
                            'phone'=>$request->phone
        ]);
        if($insert){
            Session::flash('success',"Your reservation has been saved successfully");
            return redirect()->route('reservation');
        }else{
            Session::flash('fail', "Error,reservation not created");
            return redirect()->route('reservation');
        }
      }
}
