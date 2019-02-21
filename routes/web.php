<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('home', function () {
    return view('welcome');
});
Route::get('about',function(){
    echo 'About Page';
});

// http://localhost:8000/list-product?page=1
//  uri
//  url
// http://localhost:8000/list-product/page-1

Route::get('list-product/page-{trang?}',function($p=1){
    echo $p;
    // print_r($_GET);
    // echo $_GET['page'];
})->where('trang','[0-9]+');


Route::get('user/{name}/{age?}',function($ten, $tuoi=null){
    echo $ten;
    echo "<br>";
    echo $tuoi;
})->where([
    'name'=>'[a-zA-Z-]+',
    'age'=>'[0-9]+'
]);