<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesControllor;


Route::prefix('SalesMarket')->middleware('auth')->group(function(){

//-----------------Salea Route-------------------------------
Route::get('/sales', [SalesControllor::class,'sales'])->name('sales');
Route::get('/profitdatails/{id}', [SalesControllor::class,'profitdatailsfun'])->name('profitdatailsname');
//--------------this route is ad a profcett --------------------------------------------
Route::get('/profitshow', [SalesControllor::class,'profit_show'])->name('profitshow');
//--------------this route is get a product --------------------------------------------
Route::get('/getsearch/{id}', [SalesControllor::class,'searchidcan'])->name('getsearch');
//--------------this route is pucher a product remode for uses--------------------------------------------
Route::get('/heo/{id}/{qty}', [SalesControllor::class,'removedate'])->name('heess');
//--------------this route is pucher a product --------------------------------------------
Route::get('/purchers/{id}/{qty}/{num}', [SalesControllor::class,'purcher_add'])->name('purchersrouter');
//--------------this route is sales  profite data insert table profit_datails------------
Route::post('/profiturl', [SalesControllor::class,'profit_add'])->name('profiturls');




});

