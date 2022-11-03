<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Session;
use Hash;


class UserController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function create(){
        return view('Auth.register');
    }
    public function store(Request $request){
        $request ->validate([
                    'firstname'=>'required',
                    'lastname'=>'required',
                    'gender'=>'required',
                    'email'=>'required|email|unique:users',
                    'phonenumber'=>'required',
                    'address'=>'required',
                    'password'=>'required'
        ]);
        $insert =User::create([
                    'firstname' =>$request->firstname,
                    'lastname'=>$request->lastname,
                    'gender'=>$request->gender,
                    'email'=>$request->email,
                    'phonenumber'=>$request->phonenumber,
                    'address'=>$request->address,
                    'password' =>Hash::make($request->password)

                    
        ]);
        if($insert){
            Session::flash('success',"Account successfully created");
            return redirect()->route('login');
        }else{
            Session::flash('fail',"Oops!! Account not created");
            return redirect()->route('register.create');
        }
    }
    public function postlogin(Request $request){
            $request->validate([
                'email'=>'required',
                'password'=>'required'
            ]);
            //check if email exists
        $user = User::where('email', '=', $request->email)->first();
        if (!($user === null)) { 
            $credentials = $request->only('email', 'password');
            // check if email & password are correct
        if (Auth::attempt($credentials)) {
            // Auth::user()->last_login = new DateTime;
             Auth::user()->save();
            // Session::flash('success','You have logged In successfully!'); //<--FLASH MESSAGE
            return redirect()->route("homepage");   
            }
            else{
                Session::flash('fail','Opps! You have entered invalid credentials'); //<--FLASH MESSAGE
                return redirect()->route("login");  
                }
            } 
        }
        public function logout() {
            Session::flush();
            Auth::logout();
            return Redirect()->route('login');
        }
}
