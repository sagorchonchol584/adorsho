<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class BarcodedesignControllor extends Controller
{
   
  public function searchproduct($id){	
    $result[]='';
    $barcodedata= DB::table('stock_info')->where('Barcode',$id)->where('Outlet_Id', Auth::user()->ShopID)->get();

if(count($barcodedata)>0){
  $result=['datashow'=>$barcodedata];
}else{
  $result=['datashow'=>0];
}

return response()->json($result);
    
   }  
  



   public function Barcodepage(){
   return View('management.BarCodeDesign');
   }
}
