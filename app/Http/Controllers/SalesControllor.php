<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;


class SalesControllor extends Controller
{

    //---------------This is view page to sales page---------------
    public function sales(){    
    return view('Sales-Market.Sales');
	}
	

    public function profitdatailsfun($id){
  
            $outlet_Id_user = Auth::user()->ShopID;
             $profitdatailsfun=DB::table('purches_list')->where('Outlet_Id', $outlet_Id_user)->where('Recive_num', $id)->get();	
            $profit_with_discout=DB::table('profit_datails')->where('Outlet_Id', $outlet_Id_user)->where('Recive_number', $id)->get();	
    
            if(count($profitdatailsfun) === 0 && count($profit_with_discout) === 0){				
                     $profitdatailsfun['message']='Exit';
                echo json_encode($profitdatailsfun);	   
                }
                else
                {
    
              $all_data = array("profit_with_discout"=>$profit_with_discout,"profitdatailsfun"=>$profitdatailsfun);
              echo json_encode($all_data);
          
                }      
             
      }
    

    public function profit_show(){
   
          $AdminCat = Auth::user()->AdminCat;
          $Starf_Id = Auth::user()->id;
          $ids = Auth::user()->ShopID;
          $datee=date("Y-m-d");
        
          if($AdminCat=="Admin"){
            $profit_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->orderBy('id', 'DESC')->where('Date', $datee)->get();
             echo json_encode($profit_show);
          }else{
            $profit_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->orderBy('id', 'DESC')->where('Date', $datee)->where('Starf_Id', $Starf_Id)->get();
            echo json_encode($profit_show);
          }
     }
       
        
      
    public function searchidcan($id){
	
    if(Auth::check()){
      $ids = Auth::user()->Shop_cat_id;
      $outlet_Id_user = Auth::user()->ShopID;
                  
    $stockinfo=DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->get();			
          if(count($stockinfo) === 0){				
               $datess['message']='Exit';
               echo json_encode($datess);	   
          }else{
           foreach($stockinfo as $row)
        {
         $Total_product=$row->Total_product;
         $total_sales_count=$row->Total_sales_count;
        }
         
         if($Total_product<=0){
               $datess['message']='Exit';
               $datess['data']='NO';
                echo json_encode($datess);	 
         }else{
             
             $productt=$Total_product-1;
           
             $datesss['Total_product']=$productt; 
          $datesss['Total_sales_count']=$total_sales_count+1; 
             DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->update($datesss);
             echo json_encode($stockinfo);
             
         }
          }
  
          
              
     }
    }
  

    public function removedate($id,$qty){

         $ids = Auth::user()->Shop_cat_id;
         $outlet_Id_user = Auth::user()->ShopID;           
         $stockinfo=DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->get();			
             if(count($stockinfo) === 0){				
                  $datess['message']='Exit';
                  echo json_encode($datess);	   
             }else{
 
         
             
            foreach($stockinfo as $row)
            {
            $Total_product=$row->Total_product;
            $total_sales_count=$row->Total_sales_count;
            }
            
                $productt=$Total_product+$qty;
              $datesss['Total_sales_count']=$total_sales_count-$qty; 
                $datesss['Total_product']=$productt; 
                DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->update($datesss);
                echo json_encode($stockinfo);
            
             }		
     }
   
    
    public function purcher_add($id, $qty,$num){
     $outlet_Id_user = Auth::user()->ShopID;			
     $stockinfo=DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->get();			

         if(count($stockinfo) === 0){				
              $purcherdata['message']='Exit';
              echo json_encode($purcherdata);	   
         }else{
        foreach($stockinfo as $row)
        {
        $product_name=$row->Product_name;
        $product_price=$row->Purches_Price;
        $sales_price=$row->Sales_Price; 
        $per_pice_profit=$sales_price-$product_price;
        $profit=$per_pice_profit*$qty;
        $images=$row->Image; 
        $expire_date=$row->Expire_date; 
        }
            $purcherdata['customer_id']="50"; 
            $purcherdata['customer_name']="customer_name"; 
            $purcherdata['product_Name']=$product_name; 
            $purcherdata['Sales_price']=$sales_price;
            $purcherdata['product_Price']=$product_price; 
            $purcherdata['Images']=$images;
            $purcherdata['product_id']=$id;	
            $purcherdata['product_unite']=$qty;	
            $purcherdata['Recive_num']=$num;	
            $purcherdata['profit_to_Pruduct']=$profit; 
            $purcherdata['prodcut_Exp_date']=$expire_date; 
            $purcherdata['purches_date']=date("Y-m-d");   
             $purcherdata['Admin_Id']=Auth::user()->AdminKey;
             $purcherdata['Starf_Id']=Auth::user()->id;    
             $purcherdata['Starf_Name']=Auth::user()->Name; 
             $purcherdata['Outlet_Id']=Auth::user()->ShopID;    
             $purcherdata['Outlet_Name']=Auth::user()->Shopname;
            DB::table('purches_list')->insert($purcherdata); 
         }	
    
     }

    
//----this function is sales  profite data insert table profit_datails----route name //profiturl--------
  public function profit_add(Request $reqs){

       $ids = Auth::user()->id;
        $outlet_Id_user = Auth::user()->ShopID;
     $datechack=date("Y-m-d");
     $cashAount=0;
     $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$ids )->where('Outlet_Id', $outlet_Id_user)->get();	
 

     $profitdata['Recive_number']=$reqs->numkey; 
     $profitdata['totaldiscout']=$reqs->diskey; 	
     $profitdata['Profit']=$reqs->amountkey;   	
     $profitdata['Net_Profit']=$reqs->amountkey-$reqs->diskey; 	
     $profitdata['Total_sales']=$reqs->saleskey+$reqs->diskey; 	
     $profitdata['Net_Sale']=$reqs->saleskey; 
     $profitdata['Names']=$reqs->namekey; 
     $profitdata['show_key']=0; 
     $profitdata['Date']=date("Y-m-d");   
         $profitdata['Admin_Id']=Auth::user()->AdminKey;
         $profitdata['Starf_Id']=Auth::user()->id;    
         $profitdata['Starf_Name']=Auth::user()->Name; 
         $profitdata['Outlet_Id']=Auth::user()->ShopID;    
         $profitdata['Outlet_Name']=Auth::user()->Shopname; 
     $profitdata['Discount_type']=$reqs->discatkey;    
     DB::table('profit_datails')->insert($profitdata);    	
       echo json_encode($profitdata);		


    if(count($cash_flow_data) > 0){				
    
        foreach($cash_flow_data as $row)
         {
         $cashAount=$row->cash_credit;
         }

    $cash_flow['cash_credit']=$cashAount+$reqs->saleskey;
    $cash_flow['details']='Next Sale data loaded';
    $cash_flow['Update_date']=date("Y-m-d");
   DB::table('cash_flow')->where('Starf_Id',$ids)->where('Outlet_Id', $outlet_Id_user)->update($cash_flow);    
    echo json_encode($cash_flow);	
        
      
    }else{

   $cash_flow['date']=date("Y-m-d");
   $cash_flow['cash_credit']=$reqs->saleskey;
   $cash_flow['cash_provider_name']='Cash not Sent';
   $cash_flow['details']='NetSales';
   $cash_flow['cash_debit']=0;
   $cash_flow['Outlet_Id']=Auth::user()->ShopID; 
   $cash_flow['Starf_Name']=Auth::user()->Name; 
   $cash_flow['Starf_Id']=Auth::user()->id; 
   $cash_flow['admin_show']=0;
   $cash_flow['sent_confim']=0;
   $cash_flow['Admin_show_date']=date("Y-m-d");
   $cash_flow['Update_date']=date("Y-m-d"); 
   $cash_flow['cash_mark']="No mark";
   $cash_flow['notifi_meg']=0;
   DB::table('cash_flow')->insert($cash_flow);    	
   echo json_encode($cash_flow_data);	
    }
    }  


}
