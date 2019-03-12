<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use DB;
use App\Product;
use App\Customer;
use App\PageUrl;
use App\Category;
use App\User;
use App\Role;

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

    function relationship(){
        // $data = PageUrl::with('product')->limit(10)->get();
        // echo "<div>";
        // foreach($data as $item){
        //     echo $item->url . " : ". $item->product->name;
        //     echo "<br>";
        // }
        // echo "<div>";
        // $data = Product::with('pageUrl')->limit(10)->get();
        // foreach($data as $item){
        //     echo $item->pageUrl->url.' : '. $item->name;
        //     echo "<br>";
        // }

        // $data = Category::with('products')->whereIn('id',[7,11])->get();
        // foreach($data as $type){
        //     echo "<h3>$type->name</h3>";
        //     foreach($type->products as $p){
        //         echo "<p>$p->name</p>";
        //     }
        //     echo "<hr>";
        // }

        
        // $user = User::where('id',2)->with('roles')->first();
        // // dd($users);
        // echo "<h4>$user->email</h4>";
        // foreach($user->roles as $role){
        //     echo "<li>$role->role</li>";
        // }

        // $role = Role::where('role','staff')->with('users')->first();
        // foreach($role->users as $user){
        //     echo "<li>$user->email</li>";
        // }

        // get all products by id bill

        // $data = Bill::where('id',12)
        //         ->with('products','billDetail')
        //         ->first();
        // // dd($data);
        // $total = 0;
        // foreach($data->products as $key=>$p){
        //     echo "<li>$p->name</li>";
        //     $price = $p->price;
        //     $qty = $data->billDetail[$key]->quantity;
        //     $total += $price*$qty;
        // }
        // echo "<br>";
        // echo number_format($total);
        // echo "<br>";
        // echo number_format($data->total);


        // get all products of customer id = 10 & email = huongnguyen08.cv@gmail.com
        // buy at 2018-05-25
        
        // $data = Customer::where([
        //     ['id','=',10],
        //     ['email','=','huongnguyen08.cv@gmail.com']
        // ])->with(['bills'=>function($q){
        //     $q->whereDate('date_order','2018-05-25');
        // },'bills.products'])->first();
        // // dd($data);

        // echo "<h3>Customer: $data->name</h3>";
        // foreach($data->bills as $bill){
        //     echo "<h4>IDbill: $bill->id</h4>";
        //     foreach($bill->products as $p){
        //         echo "<li>$p->name</li>";
        //     }
        //     echo "<hr>";
        // }

        // $data = Category::with('billDetail','billDetail.product')->get();
        // foreach($data as $type){
        //     echo $type->name;
        //     foreach($type->billDetail as $detail){
        //         echo "<br>";
        //         echo $detail->product->name;
        //         echo " - ";
        //         echo 'So luong: '.$detail->quantity;
        //     }
        //     echo "<hr>";
        // }
        echo "<div>";
        $data = Category::with('products','pageurl','products.pageUrlProduct')->get();
        foreach($data as $type){
            echo "<b>$type->name ---- ";
            echo $type->pageurl->url."</b> ";
            foreach($type->products as $product){
                echo "<li>$product->name -----";
                echo $product->pageUrlProduct->url."</li>";
            }
            echo "<hr>";
        }
    }
}
/**
 * 
 * Loai 1: Phu kien : phu-kien 
 *      - op lung ip : op-lung-ip
 *      - ... 
 *      - ... 
 * Loai 2: Imac
 *      - ... 
 *      - ... 
 *      - ... 
 * 
 * 
 */