<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accountbar\TransactionControllor;
use App\Http\Controllers\Accountbar\AccountControllor;



Route::prefix('Account')->middleware('auth')->group(function(){
 
    //-----------------Supper  page  oute and controller user ProductCrontrollor-------------------------------
    Route::get('/transaction-show', [TransactionControllor::class,'transaction_show'])->name('transation_show');
 
    });
    
