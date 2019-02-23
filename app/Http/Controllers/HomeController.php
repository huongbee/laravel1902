<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return 'Hello Controller';
    }
    //C1
    // function getUserId($ms){
    //     return $ms;
    // }
    //C2
    function getUserId(Request $req){
        return 'User id: '.$req->id;
    }
    function getUserInfo(Request $req){
        return 'User id: '.$req->id .' - '. $req->name;
    }
    function home(){
        return view('home');
    }
    function about(){
        $person = [
            [
                'name'=>'<i>Ti</i>',
                'age'=>20,
            ],
            [
                'name'=>'Teo',
                'age'=>22,
            ]
        ];
        $address = "KPT";
        return view('pages.about',compact('person','address'));

        // return view('pages.about',['person'=>$person, 'diachi'=>$address]);
        // return view('pages/about');
    }
}
