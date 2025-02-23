<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeshboardContro;
use App\Http\Controllers\Deshboard\OverviewControllor;
use App\Http\Controllers\Deshboard\CashflowControllor;
use App\Http\Controllers\Deshboard\ReportsControllor;

Route::controller(DeshboardContro::class)->middleware('auth')->group(function(){ 
   // Route::get('/paidbd','deshbord');
  });



  Route::prefix('Deshboard')->middleware('auth')->group(function(){


//---------------------------- Overview with controllor OverviewControllor ----------------------
    Route::get('/overview', [OverviewControllor::class,'overview_fun'])->name('overview');;
    //--------this route is deshboard show all info like sales today, upload info ent------------
    Route::get('/deshboard-all-info-get-data', [OverviewControllor::class,'deshboard_all_info_get_data_func'])->name('deshboard-all-info-route');




//------------------------------------------Cash Folow------------------------------------------
//this route name most don't use but when i will get time then try to ajax use route name
    //---this route  judt show page 
    Route::get('/cashflow', [CashflowControllor::class,'cashflowfun'])->name('cashflowfun');
    //---this route  expence cost uploaded   ----route:  stockloadfinally------------
    Route::post('/expenceadd', [CashflowControllor::class,'expence_add_func'])->name('expenceaddroute');   
    //---this route  expence cost sent cash   ----route:  stockloadfinally------------
    Route::get('/get-data-to-cash-sent/{id}', [CashflowControllor::class,'get_data_to_cash_sent_func']);
    //---this route  expence cost update   ----route:  stockloadfinally------------
    Route::post('/expence-update', [CashflowControllor::class,'expence_update_func'])->name('expence-update-route');
    Route::get('/cashflowstates', [CashflowControllor::class,'cashflowstates'])->name("cashflowstatesroute");
    //---this route  expence cost uploaded   ----route:  stockloadfinally------------
    Route::get('/get-data-to-update/{id}', [CashflowControllor::class,'get_data_to_update_func']);
    //---this route  expence cost delete   ----route:  stockloadfinally------------
    Route::get('/get-data-to-delete/{id}', [CashflowControllor::class,'get_data_to_delete_func']); 
    //---this route  delete check   ----route:  ------------
    Route::get('/get-data-to-delete-check/{id}', [CashflowControllor::class,'get_data_to_delete_check']); 

//------------------------------------------report ------------------------------------------
    
   Route::get('/reports', [ReportsControllor::class,'reports'])->name('reports');

   Route::get('/transication', [ReportsControllor::class,'transication_fun'])->name('transication');

   Route::get('/transicationshow', [ReportsControllor::class,'show_fun'])->name('transicationshow');





  });
 