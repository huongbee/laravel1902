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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('about',function(){
//     echo 'About Page';
// });

// http://localhost:8000/list-product?page=1
//  uri
//  url
// http://localhost:8000/list-product/page-1

// Route::get('list-product/page-{trang?}',function($p=1){
//     echo $p;
//     // print_r($_GET);
//     // echo $_GET['page'];
// })->where('trang','[0-9]+');


// Route::get('user/{name}/{age?}',function($ten, $tuoi=null){
//     echo $ten;
//     echo "<br>";
//     echo $tuoi;
// })->where([
//     'name'=>'[a-zA-Z-]+',
//     'age'=>'[0-9]+'
// ]);

// Route::get('user/{id}',function($id){
//     echo $id;
// });
// Route::get('product/{id}/{alias}',function($id){

// });
// Route::get('customer/{id}',function($id){

// });

// Route::get('/login',function(){
//     echo 'Login Page';
// })->name('login_page');

// Route::get('register',function(){
//     // ... register account
//     // then
//     return redirect()->route('login_page');
// });
// // <a href="{{route('login_page')}}">Login</a>


// Route::get('customer/{id}',function($id){
//     echo $id;
// })->name('get_customer');

// Route::get('test-redirect',function(){

//     return redirect()->route('get_customer',15);
//     //15 => value for id of route get_customer

//     // return redirect()->route('get_customer',['id'=>12]);
// });


// Route::get('/','HomeController@index');
// Route::get('/user/{id}','HomeController@getUserId');
// Route::get('/user/{id}/{name}','HomeController@getUserInfo')->name('userinfo');

// Route::get('home','HomeController@home');
// Route::get('about','HomeController@about');


/**
 *  http://localhost:8000/home
 *  
 *  url: https://www.thegioididong.com/laptop
 *  uri: laptop
 */

// Route::get('/',"AdminController@getHome");
// Route::get('about',"AdminController@getAbout");


Route::get('query-builder','QueryBuilderController@index');
Route::get('eloquent-model','ModelController@index');

Route::get('relationship','ModelController@relationship');

Route::get('sign-up',"AuthController@getRegister");
Route::post('sign-up',"AuthController@postRegister")->name('register');