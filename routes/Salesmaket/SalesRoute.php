<?php

use App\Http\Controllers\SalesMarket\Sales_and_purches_returns;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesMarket\SalesControllor;


Route::prefix('SalesMarket')->middleware('auth')->group(function(){

//-----------------Salea Route-------------------------------
Route::get('/sales', [SalesControllor::class,'sales'])->name('sales');
Route::get('/profitdatails', [SalesControllor::class,'profitdatailsfun'])->name('profitdatailsname');
//--------------this route is ad a profcett --------------------------------------------
Route::get('/profitshow', [SalesControllor::class,'profit_show'])->name('profitshow');
//--------------this route is get a product --------------------------------------------
Route::get('/getsearch/{id}', [SalesControllor::class,'searchidcan'])->name('getsearch');
//--------------this route is pucher a product remode for uses--------------------------------------------
Route::get('/heo/{id}/{qty}', [SalesControllor::class,'removedate'])->name('heess');
//--------------this route is pucher a product --------------------------------------------
//Route::get('/purchers/{id}/{qty}/{num}', [SalesControllor::class,'purcher_add'])->name('purchersrouter');
Route::get('/purchers', [SalesControllor::class,'purcher_add'])->name('purchersrouter');

//--------------this route is sales  profite data insert table profit_datails------------
Route::post('/profiturl', [SalesControllor::class,'profit_add'])->name('profiturls');


Route::get('/sales-returns', [SalesControllor::class, 'salesreturns'])->name('sales.retruns');
//Route::get('/sales-returns-list', [SalesControllor::class, 'salesreturnslist'])->name('salereturnlist');


Route::get('/search-customer', [SalesControllor::class, 'searchCustomer'])->name('search.customer');
Route::get('/customer-data-check', [SalesControllor::class, 'CustomerDatacheck'])->name('customer.data.check');
Route::get('/return-data-update',[SalesControllor::class, 'return_data_update'])->name('returndataupdate');


Route::get('/SalesReturn', [SalesControllor::class, 'salesreturnslist'])->name('salesreturnview');


Route::get('/return-view-for-reason', [SalesControllor::class, 'returnview'])->name('returnview');

// this route jsut test perpose 

Route::get('/testAnyurl', [SalesControllor::class,'testAnyurlfun'])->name('testAnyurl');


});

