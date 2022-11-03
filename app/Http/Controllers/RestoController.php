<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\User;
class RestoController extends Controller
{
  public function index(){
    $title = "Home Page";
    return view('livedinner.index',['title'=>$title]);
  
  }
  public function about(){
    $title = "About Us";
    return view('livedinner.about',['title'=>$title]);
  }
  public function menu(){
    $title="Menu";
    return view('livedinner.menu',['title'=>$title]);
  }
  public function stuff(){
    $title="Stuff";
    return view('livedinner.stuff',['title'=>$title]);
  }
  public function gallery(){
    $title="Gallery";
    return view('livedinner.gallery',['title'=>$title]);
  }
  public function blogdetails(){
    $title="Blog Details";
    return view('livedinner.blog-details',['title'=>$title]);
  }
  public function blog(){
    $title = "Blog";
    return view('livedinner.blog',['title'=>$title]);
  }

}
