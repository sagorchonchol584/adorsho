<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeshboardContro;

Route::controller(DeshboardContro::class)->middleware('auth')->group(function(){ 
   // Route::get('/paidbd','deshbord');
  });



  Route::middleware('auth')->group(function(){


//------------------------------------------ Deshboard ------------------------------------------
    Route::get('/overview', [DeshboardContro::class,'overview_fun'])->name('overview');;
    //--------this route is deshboard show all info like sales today, upload info ent------------
    Route::get('/deshboard_all_info_get_data', [DeshboardContro::class,'deshboard_all_info_get_data_func']);




//------------------------------------------Cash Folow------------------------------------------
    //---this route  judt show page 
    Route::get('/cashflow', [DeshboardContro::class,'cashflowfun'])->name('cashflowfun');
    //---this route  expence cost uploaded   ----route:  stockloadfinally------------
    Route::post('/expenceadd', [DeshboardContro::class,'expence_add_func']);   
    //---this route  expence cost sent cash   ----route:  stockloadfinally------------
    Route::get('/get_data_to_cash_sent/{id}', [DeshboardContro::class,'get_data_to_cash_sent_func']);
    //---this route  expence cost update   ----route:  stockloadfinally------------
    Route::post('/expence_update', [DeshboardContro::class,'expence_update_func']);
    Route::get('/cashflowstates', [DeshboardContro::class,'cashflowstates'])->name("cashflowstatesroute");
    //---this route  expence cost uploaded   ----route:  stockloadfinally------------
    Route::get('/get_data_to_update/{id}', [DeshboardContro::class,'get_data_to_update_func']);
    //---this route  expence cost delete   ----route:  stockloadfinally------------
    Route::get('/get_data_to_delete/{id}', [DeshboardContro::class,'get_data_to_delete_func']); 



//------------------------------------------report ------------------------------------------
    
   Route::get('/reports', [DeshboardContro::class,'reports'])->name('reports');
  });
 