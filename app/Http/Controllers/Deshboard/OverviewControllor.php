<?php

namespace App\Http\Controllers\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OverviewControllor extends Controller
{
   
  /*---------------------------Over view---------------------------------*/
  public function overview_fun(){
    return view('deshboard.overview') ;  
}



public function deshboard_all_info_get_data_func(){
   
        $AdminCat = Auth::user()->AdminCat;
        $Starf_Id = Auth::user()->id;
        $ids = Auth::user()->ShopID;
        $Total_product=0;
        $salesproduct=0;
        $total_com_val=0;
        $Totalproduct=0;
        $datee=date("Y-m-d");
    
        if($AdminCat=="Admin"){
        
          $tk_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->where('Date', $datee)->get();
          $total_com_vals=DB::table('stock_info')->where('Outlet_Id', $ids)->get();
    
          foreach($total_com_vals as $row)
          {  
           $total_com_val+=$row->Purches_Price*$row->Total_product;
           $Totalproduct++;
          }
          
          foreach($tk_show as $row)
          {
           $Total_product+=$row->Total_sales;
           $Totalproduct++;
          }
    
          $all_month = array("Total_product"=>$Total_product,"salesproduct"=>$salesproduct,"totalcomvalu"=>$total_com_val,"total_product"=>$Totalproduct);
          echo json_encode($all_month);
         // response()->json($all_month);
    
        }else{
    
          $tk_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->where('Date', $datee)->where('Starf_Id', $Starf_Id)->get();
          foreach($tk_show as $row)
          {
           $Total_product+=$row->Total_sales;
           $salesproduct++;
          }
    
    
          $tk_shows=DB::table('stock_info')->where('Outlet_Id', $ids)->get();
          foreach($tk_shows as $row)
          {
           $Totalproduct++;
          }
          
          $all_month = array("Total_product"=>$Total_product,"salesproduct"=>$salesproduct,"totalcomvalu"=>"000","total_product"=>$Totalproduct);
          echo json_encode($all_month);
         // response()->json($all_month);
        }
}


}
