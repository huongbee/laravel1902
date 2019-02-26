<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getHome(){
        $name = "Teo Nguyen";
        $age = 19;
        return view('index',compact('name','age'));
    }

    function getAbout(){
        return view('about');
    }
}
