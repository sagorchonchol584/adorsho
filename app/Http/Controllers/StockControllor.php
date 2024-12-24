<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class StockControllor extends Controller
{
    //-----------------------Thsi is stock Add page all funcation-------------------
public function Stock_View(){    
    return view('Sales_And_Stock.Stock_Add');
   } 
 
  public function stockchack(){
         
             $output = '';
             $ShopID = Auth::user()->ShopID;
             $addID = Auth::user()->id;
             $datee=date("Y-m-d");
             // $tk_show=DB::table('profit_datails')->where('Date', $datee)->get();->where('Product_add_user_id', $datee)
             $data = DB::table('stock_info')->where('Outlet_Id', $ShopID)->where('Product_add_user_id', $addID)->where('Product_show_by_admin', 0)->orderBy('id', 'desc')->get();
             $total_row = $data->count();
             
       
               if($total_row > 0)
               {
                foreach($data as $row)
                {
       
                if(strval($row->Weight)=='0'){
                  $showproduct=$row->Product_name;
                }else{
                  $showproduct=$row->Product_name."". $row->Weight;
                }
       
               //  if($row->Product_show_by_admin==0){
                 $message=$row->Product_load_numer*$row->Purches_Price;
                 $ddd='<input type="checkbox" id="myChecka" value="'. $row->Barcode.'-'.$row->Product_load_numer.'-'.$row->Purches_Price.'">';
       
                 $output.= '
                 <tr>
                 <td><span onclick="slectted()">'.$showproduct.'</span></td>
                 <td>'.$row->Product_load_numer.'</td>
                 <td>'.$row->Purches_Price.'</td>
                 <td>'.$message.'</td>
                 <td>'.$ddd.'</td>
                </tr>
                ';
                //  }else{
                // $message='<span style=" color:green; font-weight:bold;">Sent</span>';
                // $ddd='<input type="checkbox" hidden>';
                //  }
                //$ddd='<input type="checkbox" id="myChecka" value="5">';
              
                }
               }
               else
               { 
                 $output ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
               }
               $data = array('table_data'  =>$output,'total_data'  => $total_row);
               echo json_encode($data);
          
  }

     
public function Stock_Info_add_demo(Request $reqs){
   
      $ShopID = Auth::user()->ShopID;
      $data = DB::table('stock_info')->where('Barcode', $reqs->Barcode)->where('Outlet_Id', $ShopID)->get();
        $total_row = $data->count();
        $ndate=date_create($reqs->Expire_date);	
        $newdate=date_format($ndate,"Y-m-d");
  
        if($total_row > 0)
        {
         foreach($data as $row)
         {
          $Total_product=$row->Total_product;
          $loadeddate=$row->Expire_date;
          $shopidload=$row->Outlet_Id;
          $barcodes=$row->Barcode;
         }
         
         if($Total_product<=0){
         $datess['Product_show_by_admin']=0;
         $datess['Product_load_numer']=$reqs->Product_units;  
         $datess['Purches_Price']=$reqs->Purches_Price;  
         $datess['Sales_Price']=$reqs->Sales_Price;
         $datess['Product_add_user_id']=Auth::user()->id;
         $datess['Update_Date']=date("Y-m-d");
         $datess['Descount_rate']=$reqs->Descount_rate; 
         $datess['Expire_date']=$reqs->Expire_date; 
          
          if($reqs->Weight=="empty"){
             $datess['Weight']="0";
         }
         else{
             $datess['Weight']=$reqs->Weight;
         }
         
        if($reqs->pieces=="empty"){
             $datess['pieces']="0";
          }
         else{
       $datess['pieces']=$reqs->pieces;
         }
         
         
         DB::table('stock_info')->where('Barcode', $reqs->Barcode)->where('Outlet_Id', $ShopID)->update($datess); 
        echo json_encode($datess); 	
        //echo json_encode("working this funcation");
      
         }
         
         else if($loadeddate==$newdate){
         $total_pr=$reqs->Product_units;
         $datess['Product_show_by_admin']=0; 
         $datess['Product_load_numer']=$total_pr;  
         $datess['Purches_Price']=$reqs->Purches_Price;  
         $datess['Sales_Price']=$reqs->Sales_Price;
         $datess['Product_add_user_id']=Auth::user()->id;
         $datess['Update_Date']=date("Y-m-d");
         $datess['Descount_rate']=$reqs->Descount_rate; 
  
   
         if($reqs->Weight=="empty"){
             $datess['Weight']="0";
         }
         else{
             $datess['Weight']=$reqs->Weight;
         }
  
        if($reqs->pieces=="empty"){
         $datess['pieces']="0";
          }
         else{
       $datess['pieces']=$reqs->pieces;
         }
         
         
        DB::table('stock_info')->where('Barcode', $reqs->Barcode)->where('Outlet_Id', $ShopID)->update($datess); 
        echo json_encode($datess);
      
         }else{
              
              $datess['message']='Exit';
           echo json_encode($datess);		 
             
         }
         
         }else{
         $datess['Product_show_by_admin']=0; 
         $datess['Product_name']=$reqs->Product_name;
         $datess['Barcode']=$reqs->Barcode;
         $datess['Facility_Product_for_internet']=FALSE;
         $datess['Product_load_numer']=$reqs->Product_units;  
         $datess['Total_product']="0";
         $datess['Purches_Price']=$reqs->Purches_Price;  
         $datess['Sales_Price']=$reqs->Sales_Price;
         $datess['Product_add_user_id']=Auth::user()->id; 
         $datess['Outlet_Id']=Auth::user()->ShopID;
         $datess['Outlet_Name']=Auth::user()->Shopname;
         $datess['Image']=$reqs->Image;  
         $datess['Expire_date']=$reqs->Expire_date;  
         $datess['Add_date']=date("Y-m-d");
         $datess['Update_Date']=date("Y-m-d");
         $datess['Descount_rate']=$reqs->Descount_rate;     
         $datess['Catagory']=$reqs->Catagory;
         $datess['Sub_Catagory']=$reqs->Sub_Catagory;
         $datess['Sub_to_sub_catagory']=$reqs->Sub_to_sub_catagory;
         $datess['Top_rating_range']=0;  
         $datess['Toral_product_load_count']=0; 
         $datess['Total_sales_count']=0;  
        if($reqs->Weight=="empty"){
             $datess['Weight']="0";
         }
         else{
             $datess['Weight']=$reqs->Weight;
         }
         
         
         if($reqs->pieces=="empty"){
             $datess['pieces']="0";
         }
         else{
             $datess['pieces']=$reqs->pieces;
         }
        
         DB::table('stock_info')->insert($datess); 
         
         
         echo json_encode($datess);
         }    
} 
  

  
public function stockloadlogfuncation($barcode,$id){
    
    if(Auth::check()){
      $ids = Auth::user()->ShopID;
    $supplierdata= DB::table('stock_info')->where('Barcode', $barcode)->where('Outlet_Id', $ids)->get();
    if(count($supplierdata) === 0){				
      $datess['message']='Exit';
      echo json_encode($datess);	   
   }else{
      foreach($supplierdata as $row)
      {
      $supplierarray['Product_load_numer']=$row->Product_load_numer;
      $supplierarray['pieces']=$row->pieces;
      $supplierarray['Image']=$row->Image;
      $supplierarray['Purches_Price']=$row->Purches_Price;
      $supplierarray['Weight']=$row->Weight;
      $supplierarray['Descount_rate']=$row->Descount_rate;
      $supplierarray['Update_Date']=$row->Update_Date;
      $supplierarray['Product_add_user_id']=$row->Product_add_user_id;
      $supplierarray['Sales_Price']=$row->Sales_Price;
      $supplierarray['Admindatasentdate']=date("Y-m-d");
      $supplierarray['supplier_id']=$id;
      $supplierarray['Outlet_Id']=$row->Outlet_Id;
      $supplierarray['Product_name']=$row->Product_name;
      $supplierarray['Barcode']=$row->Barcode;
      $supplierarray['Admin_show']=0;
      }
        DB::table('suppile_info_log')->insert($supplierarray); 
        echo json_encode($supplierarray);
   }		

      $dateload['Product_show_by_admin']="1"; 
      DB::table('stock_info')->where('Barcode', $barcode)->where('Outlet_Id', $ids)->update($dateload);
      }else{
        $datess['message']="Please contract administration ";
        echo json_encode($datess); 
      } 

  //  echo json_encode($id); 
}
  



public function supplierdataload(Request $reqs){
    if(Auth::check()){
     $supplierarray['company_name']=$reqs->company_name; 
       $supplierarray['name']=$reqs->name; 
     $supplierarray['mobile']=$reqs->mobile; 
     $supplierarray['address']=$reqs->address; 
     $supplierarray['unite']=$reqs->unite; 
     $supplierarray['totaltk']=$reqs->totaltk; 
     $supplierarray['payable']=0; 
     $supplierarray['date']=date("Y-m-d"); 
     $supplierarray['paymentdate']=date("Y-m-d"); 
     $supplierarray['paymentmethod']="0"; 
     $supplierarray['paymenttk']=0; 
     $supplierarray['ShopID']=Auth::user()->ShopID;
     $supplierarray['admin_show']=0;  
     $datr= DB::table('suppile_info')->insertGetId($supplierarray);    
     echo json_encode($datr);
    }else{
     return view('login');
    }
   }


public function barcodes($id){

    	$ids = Auth::user()->Shop_cat_id;
    	$outlet_Id_user = Auth::user()->ShopID;		
	    $stockinfo=DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->get();	

    		if(count($stockinfo) === 0){
          $reults=DB::table('product_info'.$ids )->where('Barcode', $id)->get();	
    			if(count($reults) === 0){		
    			 $datess['message']='Exit';
    			 echo json_encode($datess);		 
    		    }else{	
    		    	echo json_encode($reults);
    		    	}
    		}else{
    			echo json_encode($stockinfo);
    		}
  }
    

}
