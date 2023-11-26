<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
 });

Route::view('/meagge','frontend.message')->name('reg');
//Route::view('/home','frontend.deshboard')->name('home');





Route::get('/home', [Postcontroller::class,'home'])->name('home');
Route::get('/oder', [Postcontroller::class,'oder'])->name('oder');
Route::get('/product', [Postcontroller::class,'product'])->name('product');
Route::get('/productInfo', [Postcontroller::class,'productInfo'])->name('product_info');
Route::get('/createnewprofile', [Postcontroller::class,'createnewprofile'])->name('createnewprofile');




//Route::view('/login', 'login')->name('login');
Route::get('/login', [Postcontroller::class,'login'])->name('login');




Route::post('/loginpage',[Postcontroller::class,'loginPageFunc'])->name('loginpage');
Route::get('/loginout',[Postcontroller::class,'logout'])->name('loginout');
Route::get('/chonchol',[Postcontroller::class,'datasho'])->name('chonchol');




Route::post('/reverse-me', function (Request $request) {
  $reversed = strrev($request->input('reverse_this'));
  return $reversed;
});




 Route::get('/hello', function () {
     return "nooooo";
 });



//login function


Route::post('/registaion',[Postcontroller::class,'customRegistration'])->name('regdata');
Route::post('/employecreate',[Postcontroller::class,'employeadd'])->name('Employee');



Route::get('/shw',[Postcontroller::class,'ggg'])->name('gggg');



Route::get('/customerdatanew',[Postcontroller::class,'customerinfonew']);
Route::get('/datashow',[Postcontroller::class,'twodatashow']);
Route::get('/customerinfo',[Postcontroller::class,'customerinfo'])->name('customer');
Route::get('/customerdeletinfo/{id}',[Postcontroller::class,'customerdelete'])->name('customerdelet');
Route::post('/customeradd',[Postcontroller::class,'customer_Date_add'])->name("customerdateAdd");





Route::get('/kamla', function () { echo " hello world";});
Route::get('/user/{id?}/{name?}',function($usersid="1",$userName="rohim"){
     	return view('test',[
            'userid'=>$usersid,
            'userName'=>$userName
      ]);
});






Route::controller(Postcontroller::class)->name('post.')->group(function(){

  Route::get('/test',function(){ return view("testt");})->name('boss');
  Route::get('/post/create','showMasge')->name('create'); //this test.blande.php
  Route::post('/post/store','Index')->name('store');   //this index.php
  
   Route::post('/post/systems','systemInfo')->name('systemInfodd');   //this index.php
  
  Route::get('/post/showdata','datashow')->name('showdata');
  Route::get('/post/show/{id}','single_data_show')->name('show');
  //Route::get('/post/update/{id}',[Postcontroller::class,'single_data_show_update'])->name('post.create');
  Route::post('/post/editupdate/{id}','single_data_update')->name('editupdate');
  Route::get('/post/update/{id}','single_data_show_update')->name('update');
  Route::delete('/post/delete/{id}','delete')->name('delete');

});
