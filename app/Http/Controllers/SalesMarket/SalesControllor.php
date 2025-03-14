<?php

namespace App\Http\Controllers\SalesMarket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Customer;

class SalesControllor extends Controller
{
   
    //---------------This is view page to sales page---------------
    public function sales(){    
        return view('Sales-Market.Sales');
        }
        
    
        public function profitdatailsfun(Request $res){
      
                $outlet_Id_user = Auth::user()->ShopID;
               $profitdatailsfun=DB::table('purches_list')->where('Outlet_Id', $outlet_Id_user)->where('Recive_num', $res->product_id)->get();	
                $profit_with_discout=DB::table('profit_datails')->where('Outlet_Id', $outlet_Id_user)->where('Recive_number',$res->product_id)->get();	
        
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
       
        
        public function purcher_add(Request $request){
         $outlet_Id_user = Auth::user()->ShopID;			
         $stockinfo=DB::table('stock_info')->where('Barcode', $request->id_get)->where('Outlet_Id', $outlet_Id_user)->get();			
    
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
            $profit=$per_pice_profit*$request->guality;
            $images=$row->Image; 
            $expire_date=$row->Expire_date; 
            }
           
                $purcherdata['customer_id']=$request->customer_id; 
                $purcherdata['customer_name']=$request->customer_name;
                $purcherdata['product_Name']=$product_name; 
                $purcherdata['Sales_price']=$sales_price;
                $purcherdata['product_Price']=$product_price; 
                $purcherdata['Images']=$images;
                $purcherdata['product_id']=$request->id_get;	
                $purcherdata['product_unite']=$request->guality;	
                $purcherdata['Recive_num']=$request->number;	
                $purcherdata['profit_to_Pruduct']=$profit; 
                $purcherdata['prodcut_Exp_date']=$expire_date; 
                $purcherdata['purches_date']=date("Y-m-d");    
                 $purcherdata['return_product']=0;  
                 $purcherdata['Return_recived_name']='N/A';  
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
         $custormer_id=0;
         $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$ids )->where('Outlet_Id', $outlet_Id_user)->get();	
         $profitdata['Recive_number']=$reqs->numkey; 
         $profitdata['totaldiscout']=$reqs->diskey; 	
         $profitdata['Profit']=$reqs->amountkey;   	
         $profitdata['Net_Profit']=$reqs->amountkey-$reqs->diskey; 	
         $profitdata['Total_sales']=$reqs->saleskey+$reqs->diskey; 	
         $profitdata['Net_Sale']=$reqs->saleskey; 
         $profitdata['Customer_id']=$reqs->id; 
         $profitdata['Names']=$reqs->namekey; 
         $profitdata['show_key']=0; 
         $profitdata['Date']=date("Y-m-d");   
         $profitdata['Admin_Id']=Auth::user()->AdminKey;
         $profitdata['Starf_Id']=Auth::user()->id;    
         $profitdata['Starf_Name']=Auth::user()->Name; 
         $profitdata['Outlet_Id']=Auth::user()->ShopID;    
         $profitdata['Outlet_Name']=Auth::user()->Shopname; 
         $profitdata['Discount_type']=$reqs->discatkey; 
         $profitdata['Return_amount']=0; 
         $profitdata['Return_profit']=0;
         DB::table('profit_datails')->insert($profitdata);    	
     //    echo json_encode($profitdata);		
    
     $custormer_id=$reqs->id;
   

     if($custormer_id > 0){
     
      $total_purches_count_add=0;
      $datafind= Customer::where('Outlet_Id',Auth::user()->ShopID)->where('id', $custormer_id)->get();
      if(count($datafind) > 0){
     foreach( $datafind as $datacust){
       $total_purches_count_add=$datacust->total_purches_count;
    
           }
     $dataupdata['last_purches_date']=date("Y-m-d");
     $dataupdata['last_price_cost']=$reqs->saleskey+$reqs->diskey;
     $dataupdata['total_purches_count']=$total_purches_count_add+1;
       Customer::where('id',$custormer_id)->update($dataupdata);
      }
     //return response()->json($reqs->namekey);
   
     }





     // this is for transaction monitor by any personal 
     $details='Product Sales '.$reqs->namekey.' Transaction by '.Auth::user()->Name;
     // this way to indenty for debit==0, credit==1; update==2 this insurt data for all transaction
     Transaction::create(['details' => $details,'amount_catagorise' => 1, 'amount_trans' => $reqs->saleskey+$reqs->diskey,'shop_id' => $outlet_Id_user, 'shatf_id' =>$ids]);
    
     echo json_encode($details);	
    
    
    
    
    
        if(count($cash_flow_data) > 0){				
        
            foreach($cash_flow_data as $row)
             {
             $cashAount=$row->cash_credit;
             }
    
        $cash_flow['cash_credit']=$cashAount+$reqs->saleskey;
        $cash_flow['details']='Next Sale data loaded';
        $cash_flow['Update_date']=date("Y-m-d");
       DB::table('cash_flow')->where('Starf_Id',$ids)->where('Outlet_Id', $outlet_Id_user)->update($cash_flow);    
      //  echo json_encode($cash_flow);	
            
          
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
       //echo json_encode($cash_flow_data);	
        }
    
        }  


        public function searchCustomer(Request $request)
        {
            $query = $request->input('mobile');
            $customers = Customer::where('mobile', 'LIKE', "%{$query}%")->orWhere('customer_name', 'LIKE', "%{$query}%")->limit(5)->get();

            
           return response()->json($customers);

          // echo $query;
        }

         public function CustomerDatacheck(Request $request)
        {
          //$request->customer_id
         $data= Customer::where('Outlet_Id',Auth::user()->ShopID)->where('id',$request->customer_id)->get();

         if($data->count() > 0){
          return response()->json($data);
         }else{
          return response()->json(0);
         }
            
        }


public function testAnyurlfun(){

  $custormer_id=11;

  if($custormer_id > 0){
  
   $total_purches_count_add=0;
   $datafind= Customer::where('Outlet_Id',Auth::user()->ShopID)->where('id', $custormer_id)->get();
  // echo json_encode('condition ok'. $datafind);	
   if(count($datafind) > 0){
  foreach( $datafind as $datacust){
    $total_purches_count_add=$datacust->total_purches_count;
        }
  $dataupdata['last_purches_date']=date("Y-m-d");
  $dataupdata['last_price_cost']=1200;
  $dataupdata['total_purches_count']=$total_purches_count_add+1;
   Customer::where('id',$custormer_id)->update($dataupdata);
   }
  return response()->json($datafind);
  }
}



public function salesreturns(Request $request){

$all_data_show='';
$sale_list=DB::table('purches_list')->where('Outlet_Id',Auth::user()->ShopID)->where('Recive_num',$request->recivednumber)->get();
if(count($sale_list)> 0 ){
  foreach($sale_list as $rows){
    $all_data_show.='<tr>
    <th scope="row" onclick="return_update_fun(\''.$rows->id.','.$rows->product_Name.','.$rows->product_unite.','.$rows->product_Price*$rows->product_unite.'\')">'.$rows->product_Name.'</th>
    <td>'.$rows->product_unite.'</td>
    <td>'.$rows->product_Price.'</td>
    <td>'.$rows->product_Price*$rows->product_unite.'</td>
    </tr>';
  }
}else{
    $all_data_show='<tr><td align="center" colspan="5">Not found data in sales list </td></tr>';
}

return response() ->json($all_data_show);
//echo json_encode( $all_data_show);
}



public function salesreturnslist(){

  $returnlist=0;
  $sale_list=DB::table('purches_list')
  ->where('Outlet_Id',Auth::user()
  ->ShopID)
  ->where('return_product','>', 0)
  ->get();
  

  if(count($sale_list)> 0 ){
    foreach($sale_list as $rows){
      $returnlist+=$rows->return_product;
    }
  }else{
  
  }
 return view('Sales-Market.Sales-return', compact('sale_list'),['returnlist' =>$returnlist]);;
  }
  

  public function return_data_update(Request $request){

   // product_qty:product_qty,number:value_p,product_id:product_id

    $recived_number=0;
    $product_price=0;
    $return_profit=0;
   
    $sale_list=DB::table('purches_list')
    ->where('Outlet_Id',Auth::user()->ShopID)
    ->where('id', $request->product_id)
    ->get();

if(count($sale_list)>0){
  foreach($sale_list as $rows){
    $recived_number=$rows->Recive_num;
    $product_price=$rows->product_Price * $request->number;
    $return_profit=$rows->profit_to_Pruduct;
  }


//this is puchers update when customer product return 
    $purches_array['Return_recived_date']=date("Y-m-d"); 
    $purches_array['Return_recived_name']=Auth::user()->Name;
    $purches_array['return_product']=$request->number;
    DB::table('purches_list')
    ->where('Outlet_Id',Auth::user()->ShopID)
    ->where('id', $request->product_id)
    ->update($purches_array);


//this is profit  update when customer product return 
    $profitdata['Return_profit']=$return_profit; 	
    $profitdata['Return_amount']=$product_price; 	
    DB::table('profit_datails')
    ->where('Outlet_Id',Auth::user()->ShopID)
    ->where('Recive_number', $recived_number)
    ->update($profitdata);



    // $dataupdata['coustmore_retun_count']=date("Y-m-d");
    // $dataupdata['last_price_cost']=1200;
    // $dataupdata['total_purches_count']=$total_purches_count_add+1;
    // Customer::where('id',$custormer_id)->update($dataupdata);



}
    return response()->json($product_price);
  }


    }
    