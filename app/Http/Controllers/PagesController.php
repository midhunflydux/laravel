<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $tasks = [
     		'first',
     		'second',
     		'third'
    	];
        return view('welcome',['tasks'=>$tasks]);
    }
    public function contact()
    {
      return view('contact');
    }
    public function about_us()
    {
      return view('aboutus');
    }
}
