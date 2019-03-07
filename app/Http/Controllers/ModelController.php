<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use DB;
use App\Product;
use App\Customer;

class ModelController extends Controller
{
    function index(){
        // SELECT * FROM bills
        // $data = DB::table('bills')->get();
        // $data = Bill::whereMonth('date_order',7)->get();

        // $data = Bill::get();
        // $data = Bill::all();

        // $data = Product::join('categories as c',function($query){
        //     $query->on('c.id', '=','products.id_type');
        // })->select(DB::raw('count(products.id) as tongSP'), 'c.name as tenLoai')
        // ->where('c.name','Phụ kiện')
        // ->orWhere('c.name','iMac')
        // ->orderBy('tongSP')
        // ->groupBy('c.name')
        // ->having('tongSP','>=',20)
        // ->get();

        // dd($data);

        //insert
        // $customer = new Customer();
        // $customer->name = 'Nguyen Van Ti';
        // $customer->gender = 'male';
        // $customer->email = 'ti@gmail.com';
        // $customer->address = 'Cao Thang Quan 10';
        // $customer->phone = '098765432';
        // $customer->save();
        // dd($customer);

        // fillable model
        // $customer = Customer::create([
        //     'name' => 'Nguyen Van Teo',
        //     'gender' => 'nam',
        //     'email' => 'teo02@gmail.com',
        //     'address'=> 'Cao Thang Quan 10',
        //     'phone' => '098765432'
        // ]);
        // dd($customer);

        // //query builder
        // DB::table('customers')->insert([
        //     'email' => 'john@example.com', 
        //     'votes' => 0
        // ]);

        //update
        // $customer = Customer::where('email','teo@gmail.com')->first();
        // if($customer){
        //     $customer->address = '181 Cao Thang';
        //     $customer->save();
        // }
        // else{
        //     echo "khong tim thay";
        // }

        // $customer = Customer::where('email','teo@gmail.com')
        //             ->update([
        //                 'address' => 'Chung cu Charminton',
        //                 'phone'=> '123456787654'
        //             ]);
        
        //delete
        // $customer = Customer::where('email','teo@gmail.com')->first();
        // if($customer){
        //     $customer->delete();
        // }
        // else{
        //     echo "khong tim thay";
        // }
        $customer = Customer::where('email','teo@gmail.com')->delete();


    }
}
