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
 
 
 
Route::get('/report', [Postcontroller::class,'report'])->name('report');


Route::get('/supplierinfologstates', [Postcontroller::class,'suplier_info_log_state'])->name("supplierlog");
Route::get('/supplierstates', [Postcontroller::class,'suplierstate'])->name("supplierstates");
Route::post('/chackingtwo', [Postcontroller::class,'chackingfuntwo']);


//----it's ok this route
Route::get('/stockloadlog/{barcode}/{id}', [Postcontroller::class,'stockloadlogfuncation']);
Route::post('/supplierdataload', [Postcontroller::class,'supplierdataload']);
// test perpos user route

Route::get('/profitshow', [Postcontroller::class,'profit_show']);
Route::get('/tkshow', [Postcontroller::class,'month_profit']);
Route::get('/totalproduct', [Postcontroller::class,'totalproduct']);
// Route::get('/salesshow', [Postcontroller::class,'sales_show']);



Route::get('/profitdatails/{id}', [Postcontroller::class,'profitdatailsfun'])->name('profitdatailsname');
Route::get('/heo/{id}/{qty}', [Postcontroller::class,'removedate'])->name('heess');
Route::get('/purchers/{id}/{qty}/{num}', [Postcontroller::class,'purcher_add'])->name('purchersrouter');
Route::get('/profiturl/{discat}/{dis}/{sales}/{amount}/{num}/{name}', [Postcontroller::class,'profit_add'])->name('profiturls');





//this a test purpose ,this succssfull methoth,,,route name length,,,and controlar function name length
Route::get('/live_search/action', [Postcontroller::class,'action'])->name('live_search.action');
Route::get('/stock_show', [Postcontroller::class,'stockchack'])->name('stock_show_ronter');;
Route::get('/barcode/{id}', [Postcontroller::class,'barcodes'])->name('barcodess');
Route::get('/getsearch/{id}', [Postcontroller::class,'searchidcan'])->name('getsearch');
Route::view('/meagge','frontend.message')->name('reg');
//Route::view('/home','frontend.deshboard')->name('home');


//--this route is login users use time show like how much time loging  user for login id--
Route::get('status', [Postcontroller::class, 'userOnlineStatus']);
Route::get('/tests', [Postcontroller::class,'testssss'])->name('tests');





//--product add route this --
Route::get('/product', [Postcontroller::class,'product'])->name('product');
Route::get('/productInfo', [Postcontroller::class,'productInfo'])->name('product_info');
Route::get('/productdeletedata/{id}',[Postcontroller::class,'productdelete'])->name('productdeleteda');
Route::post('/prsearch',[Postcontroller::class,'productInfo_search'])->name('pro_info_search');
Route::post('/productloaddata', [Postcontroller::class,'product_add'])->name('loader');
Route::post('/productloaddatatest', [Postcontroller::class,'product_add_test'])->name('loadertest');
Route::post('/imagesss', [Postcontroller::class,'imagesss'])->name('loaderimage');





//--catagory route --
Route::post('/catagoryloaddata', [Postcontroller::class,'catagory_add'])->name('loader_catagory');
Route::post('/subcatagoryloaddata', [Postcontroller::class,'sub_catagory_add'])->name('sub_loader_catagory');
Route::post('/subtosubcatagoryloaddata', [Postcontroller::class,'sub_to_sub_catagory_add'])->name('sub_to_sub_loader_catagory');
Route::get('/catagoryshowdata', [Postcontroller::class,'catagoryshow']);
//--this is product catagory add ,you can selete to sub catagory loading data route this --
Route::get('GetSubCatAgainstMain/{id}', [Postcontroller::class,'GetSubCatAgainstMain']);
Route::get('GetSubCatAgainstMainmulti/{id}', [Postcontroller::class,'GetSubCatAgainstMainmulti']);


//--stock inforamtion route --
Route::get('/Stockadd', [Postcontroller::class, 'stockaddfuntion'])->name('stockadd');
//Route::post('/stockload', [Postcontroller::class, 'Stock_Info_add'])->name('stockload');
Route::post('/stockload', [Postcontroller::class, 'Stock_Info_add_demo'])->name('stockload');



//user create or regstition  function
Route::get('/createnewprofile', [Postcontroller::class,'createnewprofile'])->name('createnewprofile');
Route::get('/productsupplier', [Postcontroller::class,'product_supplier'])->name('product_supplier_page');
Route::post('/registaion',[Postcontroller::class,'customRegistration'])->name('regdata');
Route::post('/employecreate',[Postcontroller::class,'employeadd'])->name('Employee');



//login function
Route::get('/login', [Postcontroller::class,'login'])->name('login');
Route::post('/loginpage',[Postcontroller::class,'loginPageFunc'])->name('loginpage');
Route::get('/loginout',[Postcontroller::class,'logout'])->name('loginout');




//page system  function
Route::get('/sales', [Postcontroller::class,'sales'])->name('sales');
Route::get('/home', [Postcontroller::class,'home'])->name('home');
Route::get('/oder', [Postcontroller::class,'oder'])->name('oder');
Route::get('/profileView', [Postcontroller::class,'profileView'])->name('profileView');
Route::get('/chonchol',[Postcontroller::class,'datasho'])->name('chonchol');

//Route::post('/reverse-me', function (Request $request) {$reversed = strrev($request->input('reverse_this'));return $reversed;});


Route::get('/hello', function () {
     return "nooooo";
 });
Route::get('/shw',[Postcontroller::class,'ggg'])->name('gggg');



//Route::get('/customerdatanew',[Postcontroller::class,'customerinfonew']);

//this page onlice log cout data
Route::get('/datashow',[Postcontroller::class,'twodatashow']);


//this page customre date read write 
Route::get('/customerinfo',[Postcontroller::class,'customerinfo'])->name('customer');
Route::get('/customerdeletinfo/{id}',[Postcontroller::class,'customerdelete'])->name('customerdelet');
Route::post('/customeradd',[Postcontroller::class,'customer_Data_add'])->name("customerdateAdd");





 //Route::get('/kamla', function () { echo " hello world";});
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
