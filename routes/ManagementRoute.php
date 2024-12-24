<?php

use App\Http\Controllers\ManagementControllor;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){


Route::get('/category',[ManagementControllor::class, 'categorysview'])->name('categorycheck');

Route::get('/get_all_data_to_categorys',[ManagementControllor::class, 'get_all_funation_data']);

});
