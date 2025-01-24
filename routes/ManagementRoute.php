<?php

use App\Http\Controllers\ManagementControllor;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){


Route::get('/category',[ManagementControllor::class, 'categorysview'])->name('categorycheck');

Route::get('/get-all-data-to-categorys',[ManagementControllor::class, 'get_all_funation_data']);

Route::get('/new-get-all-data-to-categorys',[ManagementControllor::class, 'new_get_all_funation_data'])->name('get.funation.data');

});
