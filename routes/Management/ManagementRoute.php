<?php

use App\Http\Controllers\Management\CatagorisCrontrollor;
use App\Http\Controllers\Management\StockControllor;
use App\Http\Controllers\Management\ProductControllor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\SupplierControllor;
use App\Http\Controllers\Management\BarcodedesignControllor;



Route::prefix('Management')->middleware('auth')->group(function(){



Route::get('/category',[CatagorisCrontrollor::class, 'categorysview'])->name('categorycheck');
Route::get('/get-all-data-to-categorys',[CatagorisCrontrollor::class, 'get_all_funation_data'])->name('get-all-data-to-catagories');
Route::get('/new-get-all-data-to-categorys',[CatagorisCrontrollor::class, 'new_get_all_funation_data'])->name('get.funation.data');
Route::get('/Cat-add',[CatagorisCrontrollor::class,'cat_add_funcation'])->name('cat-add-route');



//-----------------This all Catagury create and show controllor use CatagorisCrontrollor-------------------------------
Route::post('/catagoryloaddata', [CatagorisCrontrollor::class,'catagory_add'])->name('loader_catagory');
Route::get('/catagoryshowdata', [CatagorisCrontrollor::class,'catagoryshow'])->name('catagory_showdata');
Route::get('GetSubCatAgainstMain/{id}', [CatagorisCrontrollor::class,'GetSubCatAgainstMain'])->name('Get-Sub-Cat-Against-Main');
Route::post('/subcatagoryloaddata', [CatagorisCrontrollor::class,'sub_catagory_add'])->name('sub_loader_catagory');
Route::post('/subtosubcatagoryloaddata', [CatagorisCrontrollor::class,'sub_to_sub_catagory_add'])->name('sub_to_sub_loader_catagory');
Route::get('GetSubCatAgainstMainmulti/{id}', [CatagorisCrontrollor::class,'GetSubCatAgainstMainmulti'])->name('Get-Sub-Cat-Against-Mainmulti');




//-----------------Stock Aad page  oute and controller user StockControllor-------------------------------

Route::get('/stock',[StockControllor::class,"Stock_View"])->name('stock');
Route::get('/stock_show', [StockControllor::class,'stockchack'])->name('stock_show_ronter');
Route::get('/barcode/{id}', [StockControllor::class,'barcodes'])->name('barcodess');
Route::post('/stockload', [StockControllor::class, 'Stock_Info_add_demo'])->name('stockload');
Route::get('/stockloadlog/{barcode}/{id}', [StockControllor::class,'stockloadlogfuncation']);
Route::post('/supplierdataload', [StockControllor::class,'supplierdataload'])->name('supplier-dataload-routes');
Route::get('/barcode/{id}', [StockControllor::class,'barcodes'])->name('barcodess');




//-----------------Product Aad page  oute and controller user ProductCrontrollor-------------------------------
Route::get('/productInfo', [ProductControllor::class,'productInfo'])->name('product_info');
Route::get('/productdeletedata/{id}',[ProductControllor::class,'productdelete'])->name('productdeleteda'); //this know how to use 
Route::post('/productloaddata', [ProductControllor::class,'product_add'])->name('loader');




//Barcode manager
Route::get('/productInfosearch/{id}', [BarcodedesignControllor::class,'searchproduct']);
Route::get('/Barcode-manages', [BarcodedesignControllor::class,'Barcodepage'])->name('barcodemange');

//-----------------Supper  page  oute and controller user ProductCrontrollor-------------------------------
Route::get('/supplier', [SupplierControllor::class,'product_supplier'])->name('product_supplier_page');
Route::get('/supplierlist/{id}', [SupplierControllor::class,'suplier_list']); //----
Route::get('/supplierstates', [SupplierControllor::class,'suplierstate'])->name("supplierstatesrounte"); //-----
Route::post('/payabledataloaded', [SupplierControllor::class, 'Payable_finally'])->name('payabledataloadedroute');  //----
Route::post('/stockloadfinally', [StockControllor::class, 'Stock_Info_add_finally'])->name('stockloadfinallyroute'); 






});
