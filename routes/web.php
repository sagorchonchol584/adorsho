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




//------------this veryfiled route  
 Route::get('/', function () {
     return view('welcome');
 });
 
 Route::get('/oder', [Postcontroller::class,'oder'])->name('oder');
 









//-----------this use for test purpose ---this has sale and markett -------------------
Route::get('/Stockadd', [Postcontroller::class, 'stockaddfuntion'])->name('stockadd');









//Route::get('/supplierinfologstates', [Postcontroller::class,'suplier_info_log_state'])->name("supplierlog");
//--------this function is show pop alert data get payment info & show data, but not payemnt-------route name:supplierlist
//Route::get('/supplierlist/{id}', [Postcontroller::class,'suplier_list']); //----
//Route::get('/supplierstates', [Postcontroller::class,'suplierstate'])->name("supplierstatesrounte"); //-----
//Route::post('/stockloadfinally', [Postcontroller::class, 'Stock_Info_add_finally']); //-------
//Route::post('/payabledataloaded', [Postcontroller::class, 'Payable_finally']);  //----






Route::get('/show_sent_tk', [Postcontroller::class,'show_sent_tk_details'])->name("show_sent_route");
Route::get('/data_chack_to_sender_data', [Postcontroller::class,'data_chack_to_sender_data_fun']);
Route::post('/cashshowadmin', [Postcontroller::class,'cashshowadminfunction']);



Route::get('/daily_activity_load', [Postcontroller::class, 'Daily_activity_auto_data_loaded']);
Route::get('/stockloadlog/{barcode}/{id}', [Postcontroller::class,'stockloadlogfuncation']);
Route::get('/live_search/action', [Postcontroller::class,'action'])->name('live_search.action');
Route::get('status', [Postcontroller::class, 'userOnlineStatus']);





//user create or regstition  function
Route::get('/createnewprofile', [Postcontroller::class,'createnewprofile'])->name('createnewprofile');
Route::post('/registaion',[Postcontroller::class,'customRegistration'])->name('regdata');
Route::post('/employecreate',[Postcontroller::class,'employeadd'])->name('Employee');



//login function
 Route::get('/login', [Postcontroller::class,'login'])->name('login');
Route::post('/loginpage',[Postcontroller::class,'loginPageFunc'])->name('loginpage');
Route::get('/loginout',[Postcontroller::class,'logout'])->name('loginout');



Route::get('/profileView', [Postcontroller::class,'profileView'])->name('profileView')->middleware('auth');


//this page customre date read write 
Route::get('/customerinfo',[Postcontroller::class,'customerinfo'])->name('customer');
Route::get('/customerdeletinfo/{id}',[Postcontroller::class,'customerdelete'])->name('customerdelet');
Route::post('/customeradd',[Postcontroller::class,'customer_Data_add'])->name("customerdateAdd");






require __DIR__.'/Deshboard/deshboardRoute.php';
require __DIR__.'/Salesmaket/SalesRoute.php';
require __DIR__.'/Management/ManagementRoute.php';
require __DIR__.'/Acountbar/AcountRoute.php';