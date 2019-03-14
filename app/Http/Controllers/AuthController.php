<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use App\User;

class AuthController extends Controller
{
    function getRegister(){
        return view('pages.register');
    }

    function postRegister(Request $req){
        // $arr = [
        //     'username'=> $req->username,
        // ];
        $mess = [
            'email.required'=>'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'email.min' => 'Email ít nhất :min kí tự',
            'email.unique'=> ':attribute đã có người sử dụng',
            'password_confirmation.same' => 'Password không giống nhau'
        ];
        $rules = [
            'email'=>'required|email|min:10|unique:users,email',
            'username'=>'required|min:10|unique:users',
            // 'birthdate'=>'',
            'password'=>'required|min:6',
            'password_confirmation' => 'same:password'
        ];
        $validator = Validator::make($req->all(),$rules,$mess);
        if($validator->fails())
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        else 
            $user = new User;
            $user->email = $req->email;
            $user->username = $req->username;
            $user->birthdate = $req->birthdate;
            $user->password = Hash::make($req->password);
            $user->save();
            dd($user);
    }   
}

//111111: $2y$10$Z8.DJSJwCWL.VzFUoGJwJOKh5EgbW8oiMXUL4.289XzJqh/mQJ1hy
//111111: $2y$10$aTPuwrCbnBSTunDEIvWbouS/gLa0fiKBW2SxXDLXrxuw1Opt32CKC
//111111: $2y$10$EM0H5NOoWPk5IpTH.4oT4uCL7NVHcFVrAZCy4rAvOlHYOJPtIldGG

