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
        // $data = DB::table('products as p')
        //         ->join('categories as c','p.id_type','=','c.id','inner')
        //         ->where('c.id','=','7')
        //         ->get(['p.name as tenSP','c.name as tenloai']);
        //         //first();
    

        $data = DB::table('products')
                ->orderBy('price','DESC')
                ->skip(0)
                ->take(10)
                ->get(['name','price']);

                // ->select('price','name')
                // ->limit(10)
                // ->orderByDesc('price')
        // dd($data);  
        // foreach($data as $product){
        //     echo "<h4>$product->name</h4>";
        //     echo "<h4>$product->price</h4>";
        //     echo "<hr>";
        // }

        // $data = DB::table('products')
        //         ->selectRaw('avg(price) as dongiaTB, avg(promotion_price) as dongiaTB2')
        //         ->where('deleted',0)
        //         ->first();
        // dd($data);
        
        // SELECT c.name, sum(price) as tongtien, count(p.id) as tongSP
        // FROM products as p
        // INNER JOIN categories as c
        // ON p.id_type = c.id
        // WHERE p.price BETWEEN 50000000 AND 100000000
        // GROUP BY c.name
        // $data = DB::table('products as p')
        //         ->join('categories as c',function($query){
        //             $query->on('c.id', '=','p.id_type');
        //         })->where([
        //             ['price','>=',50000000],
        //             ['name','like','%iphone%'],
        //         ])
        //         ->selectRaw('c.name, sum(price) as tongtien, count(p.id) as tongSP')
        //         ->groupBy('c.name')
        //         ->get();

        $data = DB::table('products as p')
                ->join('categories as c',function($query){
                    $query->on('c.id', '=','p.id_type');
                })->whereBetween('price',[50000000,100000000])
                ->selectRaw('c.name, sum(price) as tongtien, count(p.id) as tongSP')
                ->groupBy('c.name')
                ->get();
        dd($data);

    }
}
