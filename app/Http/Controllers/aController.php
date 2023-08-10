<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aController extends Controller
{
    public function b(){
        return view("b");
    }

    public function about(){
       return view("about");
     }

    public function portfolio(){
        return view("portfolio");
      }

    public function team(){
        return view("team");
      }

     
}
