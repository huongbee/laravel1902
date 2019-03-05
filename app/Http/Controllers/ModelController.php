<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use DB;
use App\Product;

class ModelController extends Controller
{
    function index(){
        // SELECT * FROM bills
        // $data = DB::table('bills')->get();
        // $data = Bill::whereMonth('date_order',7)->get();

        // $data = Bill::get();
        // $data = Bill::all();

        $data = Product::join('categories as c',function($query){
            $query->on('c.id', '=','products.id_type');
        })->select(DB::raw('count(products.id) as tongSP'), 'c.name as tenLoai')
        ->where('c.name','Phụ kiện')
        ->orWhere('c.name','iMac')
        ->orderBy('tongSP')
        ->groupBy('c.name')
        ->having('tongSP','>=',20)
        ->get();

        dd($data);
    }
}
