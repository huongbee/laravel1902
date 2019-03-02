<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use DB;

class QueryBuilderController extends Controller
{
    function index(){
        // SELECT * FROM products;
        // $data = DB::table('products')->get();

        // SELECT * FROM products where id<=10;
        /*
            $data = DB::table('products')
                ->where('id','<=',10)
                ->get(['id','name','price']);
        */
        // SELECT * FROM products where id<=10 AND price >= 30.000.000;
        /*$data = DB::table('products')
                ->where([
                    ['id','<=',10],
                    ['price','>=',30000000]
                ])->select('id','name')
                ->get();
        */
        // SELECT * FROM products where id<=10 OR price >= 30.000.000;
        // $data = DB::table('products')
        //         ->where([
        //             ['id','<=',10]
        //         ])->orWhere('price','>=',30000000)
        //         ->select('id','name')
        //         ->offset(10)
        //         ->take(20)
        //         ->get();
                // ->limit(20)
                // ->offset(10)->take(20)  .... LIMIT 10,20
                
        // SELECT p.name as tenSP, c.name as tenloai
        // FROM products p 
        // INNER JOIN categories c
        // ON p.id_type = c.id
        // WHERE c.id = 7 
        $data = DB::table('products as p')
                ->join('categories as c','p.id_type','=','c.id','inner')
                ->where('c.id','=','7')
                ->get(['p.name as tenSP','c.name as tenloai']);

                //first();
        dd($data);  

    }
}
