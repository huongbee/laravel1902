<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    function getRegister(){
        return view('pages.register');
    }

    function postRegister(Request $req){
        // $arr = [
        //     'username'=> $req->username,
        // ];
        $validator = Validator::make($req->all(),[
            'email'=>'required|email|min:10|unique:users,email',
            'username'=>'required|min:10|unique:users',
            // 'birthdate'=>'',
            'password'=>'required|min:6',
            'password_confirmation' => 'same:password'
        ]);
        if($validator->fails())
            return redirect()->back()->withErrors($validator);
        else 
            dd($req->all());
            

    }   
}
