<?php

namespace App\Http\Controllers\SalesMarket;

use App\Http\Controllers\Controller;
use App\Models\Returnmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\Customer;
use Carbon\Carbon;
class SalesControllor extends Controller
{
   
    //---------------This is view page to sales page---------------
    public function sales(){    
        return view('Sales-Market.Sales');
        }
        
    
        public function profitdatailsfun(Request $res){
      
                $outlet_Id_user = Auth::user()->ShopID;
                $purshes_data_list='';
                $proft_show[]='';

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
                 
// if(count($profitdatailsfun)> 0 && count($profit_with_discout)> 0 ){
 
//   foreach($profitdatailsfun as $prw){
//             $purshes_data_list.='
//             <tr>
//             <td>'.$prw->product_Name.'</td>
//             <td>'.$prw->product_unite.'</td>
//             <td>'.$prw->product_Price.'</td>
//             <td>'.$prw->product_unite*$prw->product_Price.'</td>
//             </tr>';
//             }

//             foreach($profit_with_discout as $pcrw){
//               $proft_show[]=['total_sales'=>$pcrw->Total_sales,'Descount_show'=>$pcrw->totaldiscout];
//               }

//           }else{
//             $purshes_data_list='<tr><td align="center" colspan="5">Not found data in sales list </td></tr>';
//           }
//        //   $all_data = array("profit_with_discout"=>$purshes_data_list,"profitdatailsfun"=>$proft_show);
          
//        return response()->json($proft_show);
                   
        

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
         $profitdata['Return_count']=0;
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





public function salesreturns(Request $request){

$all_data_show='';
$all_custmore_data='';

$sale_list=DB::table('purches_list')
->where('Outlet_Id',Auth::user()->ShopID)
->where('Recive_num',$request->recivednumber)
->get();

$profit_data=DB::table('profit_datails')
->where('Outlet_Id',Auth::user()->ShopID)
->where('Recive_number',$request->recivednumber)
->get();



// ->where(function ($query) {
//   $query->whereColumn('product_unite', 'return_product')
//         ->orWhereColumn('return_product', '<=', 'product_unite');
// })
// ->get();


if(count($sale_list)> 0 ){
  foreach($sale_list as $rows){
    $all_data_show.='<tr>
    <th scope="row" onclick="return_update_fun(\''.$rows->id.','.$rows->product_Name.','.$rows->product_unite.','.$rows->Sales_price*$rows->product_unite.','.$rows->return_product.'\')">'.$rows->product_Name.'</th>
    <td>'.$rows->product_unite.'</td>
    <td>'.$rows->return_product.'</td>
    <td>'.$rows->return_product*$rows->Sales_price.'</td>
    <td>'.$rows->product_unite-$rows->return_product.'</td>
    </tr>';
  }
}else{
    $all_data_show='<tr><td align="center" colspan="5">Not found data in sales list </td></tr>';
}

if(count($profit_data)>0){
  foreach($profit_data as $rw){

$all_custmore_data='<tr>
<td> <strong>'.'Customer Name: '.'</strong></td>
<td>'.$rw->Names.'</td>
</tr>

<tr>
<td><strong>'.'Recived Number: '.'</strong></td>
<td>'.$rw->Recive_number.'</td>
</tr>

<tr>
<td><strong>'.'Purches Date : '.'</strong></td>
<td>'.$rw->Date.'</td>
</tr>

<tr>
<td><strong>'.'Return Count : '.'</strong></td>
<td>'.$rw->Return_count.'</td>
</tr>

<tr>
<td><strong>'.'Return Amount: '.'</strong></td>
<td>'.$rw->Return_amount+$rw->Return_profit.'Tk</td>
</tr>';

  }
}




$datashow=['listofreturn'=>$all_data_show,'custmorinfo'=>$all_custmore_data];

return response() ->json($datashow);
//echo json_encode( $all_data_show);
}

public function start_end_check(Request $request){
  $all_data_show='';

  $sale_list = DB::table('purches_list')
      ->where('Outlet_Id', Auth::user()->ShopID)
      ->whereBetween('Return_recived_date', [$request->startDate, $request->endDate]) // Correct order
      ->get();




  if(count($sale_list)> 0 ){
    foreach($sale_list as $rows){
      $all_data_show.='<tr>
      <th scope="row" onclick="return_product_view(\''.$rows->id.'\')">'.$rows->product_Name.'</th>
      <td>'.$rows->product_unite.'</td>
      <td>'.$rows->return_product.'</td>
      <td>'.$rows->return_product*$rows->Sales_price.'</td>
      <td>'.$rows->product_unite-$rows->return_product.'</td>
      </tr>';
    }
  }else{
      $all_data_show='<tr><td align="center" colspan="5">Not found data in sales list </td></tr>';
  }
  
   $datashow=['listofreturn'=>$all_data_show];

   return response() ->json($datashow);
  //echo json_encode( $all_data_show);

}

public function salesreturnslist(){

  $returnlist=0;
  $years=date('Y');
  $months=date('m');
  $custmore_count=[];
  $dateshow=[];
  $totalpice=0;
  $counts=0;
  $sale_list=DB::table('purches_list')
  ->where('Outlet_Id',Auth::user()->ShopID)
  ->where('return_product','>', 0)
  ->get();
  

  if(count($sale_list)> 0 ){
    foreach($sale_list as $rows){

      $date_check = explode('-',$rows->Return_recived_date);
      $month = $date_check[1];
      $year  = $date_check[0];


    //   try {
    //     $returnDate = Carbon::createFromFormat('Y-m-d', $rows->Return_recived_date);
    //     $month = $returnDate->month;
    //     $year = $returnDate->year;
    // } catch (\Exception $e) {
    //     // Handle invalid date format
    //     continue;
    // }

    
      if($year.$month==$years.$months){

      $dateshow[]=['id'=>$rows->id,'product_Name'=>$rows->product_Name,'product_unite'=>$rows->product_unite,'return_product'=>$rows->return_product,'Sales_price'=>$rows->Sales_price];


      $returnlist+=$rows->return_product;
      $custmore_count[]=$rows->Recive_num;
      $totalpice+=$rows->return_product * $rows->Sales_price;
       }
    }

  //  $countsfun = array_count_values($custmore_count);
   // dd($custmore_count);

    if(empty($custmore_count)){
      $countsfun=0;
    //  dd($countsfun);
     }else{
      $countsfun = array_count_values($custmore_count);
      $counts=count($countsfun);
    //  dd($countsfun);
     }
  //  // $counts =0;
  }else{
  
  }

 
 return view('Sales-Market.Sales-return', compact('dateshow'),['returnlist' =>$returnlist,'total_customer_count'=> $counts,'nowmonth'=>date('F'),'Total_return_price'=>$totalpice]);;
  }
  

  public function return_data_update(Request $request){

   // product_qty:product_qty,number:value_p,product_id:product_id

    $recived_number=0;
    $product_price=0;
    $return_profit=0;
    $return_product=0;
    $customrey_id=0;
    $returnvalue=0;
    $detailsinfo='';


    //---that is profit variable
    $reurn_tk=0;
    $return_profit_profit=0;
    $return_count=0;
    $sale_list=DB::table('purches_list')
    ->where('Outlet_Id',Auth::user()->ShopID)
    ->where('id', $request->product_id)
    ->get();



if(count($sale_list)>0){
  foreach($sale_list as $rows){
    $recived_number=$rows->Recive_num;
    $product_price=$rows->product_Price * $request->number;
    $return_profit=$rows->profit_to_Pruduct;
    $customrey_id=$rows->customer_id;
    $return_product=$rows->return_product;
  }


//this is puchers update when customer product return 
    $purches_array['Return_recived_date']=date("Y-m-d"); 
    $purches_array['Return_recived_name']=Auth::user()->Name;
    $purches_array['return_product']=$return_product+$request->number;
    DB::table('purches_list')
    ->where('Outlet_Id',Auth::user()->ShopID)
    ->where('id', $request->product_id)
    ->update($purches_array);


//this is profit  update when customer product return 
    $profit_data=DB::table('profit_datails')
    ->where('Outlet_Id',Auth::user()->ShopID)
    ->where('Recive_number', $recived_number)
    ->get();


if(count($profit_data)>0){
  foreach($profit_data as $rws){
    $reurn_tk=$rws->Return_amount;
    $return_profit_profit=$rws->Return_profit;
    $return_count=$rws->Return_count;
  }
}

$profitdata['Return_profit']=$return_profit_profit+$return_profit; 	
$profitdata['Return_amount']=$reurn_tk+$product_price; 
$profitdata['Return_count']=$return_count+1;




    DB::table('profit_datails')
    ->where('Outlet_Id',Auth::user()->ShopID)
    ->where('Recive_number', $recived_number)
    ->update($profitdata);



    $custmorydata=Customer::where('id', $customrey_id)->get();
    if(count($custmorydata)>0){
            foreach($custmorydata as $rowcustm)
            {
              $returnvalue=$rowcustm->coustmore_retun_count;
            }
          $dataupdata['coustmore_retun_date']=date("Y-m-d");
          $dataupdata['coustmore_retun_count']=$returnvalue+1;
         Customer::where('id',$customrey_id)->update($dataupdata);
    }


    $datafind = DB::table('cash_flow')
    ->where('Outlet_Id', Auth::user()->ShopID)
    ->where('Starf_Id', Auth::user()->id)
    ->value('cash_credit');


    $updatacash_creat['cash_credit']=$datafind-($product_price+$return_profit);
    $datafind = DB::table('cash_flow')
    ->where('Outlet_Id', Auth::user()->ShopID)
    ->where('Starf_Id', Auth::user()->id)
    ->update($updatacash_creat);




    $ShopID = Auth::user()->ShopID;
    $stratf_id = Auth::user()->id;
    $adminCat = Auth::user()->AdminCat;
  
    
    $cashflow['Outlet_id']=Auth::user()->ShopID; 
    $cashflow['Admincat']=Auth::user()->AdminCat;
    $cashflow['debit_tk']=$product_price+$return_profit; 
    $cashflow['date']=date("Y-m-d");
    $cashflow['Update_Date']=date("Y-m-d"); 	
    $cashflow['Admin_show_date']=date("Y-m-d"); 
    $cashflow['stratf_id']= Auth::user()->id;
    $cashflow['details']='Product Return';
    $cashflow['Ac_check']=0; 
    $cashflow['expend_cost']=2;//this product return (2) if expense you shoud write 1

    if($adminCat=="Admin"){
      $cashflow['admin_show']=1; 
     }else{
      $cashflow['admin_show']=0; 
     }

    $cashflow['supplier_id']=0; 
    $cashflow['Name']=Auth::user()->Name; 
    DB::table('cash_flow_cost_info')->insert($cashflow);  


    // this is for transaction monitor by any personal 
$details='Expence add by '.Auth::user()->Name.' Product Return to Sales , product Id '.$request->product_id;
// this way to indenty for debit==0, credit==1; this insurt data for all transaction
Transaction::create(['details' => $details,'amount_catagorise' => 0, 'amount_trans' =>($product_price+$return_profit),'shop_id' => Auth::user()->ShopID, 'shatf_id' => Auth::user()->id]);

if($request->return_reason===NULL  ){ $detailsinfo='No input';}else{$detailsinfo=$request->return_reason;}

Returnmark::create(['details'=>$detailsinfo,'received_number' => $recived_number, 'Product_id' => $request->product_id, 'date' =>date("Y-m-d"), 'Starf_Id' => Auth::user()->id,'Outlet_Id'=>Auth::user()->ShopID]);





}
   return response()->json($product_price);
  }


public function returnview(Request $request){
  $datagetview='';
$dataget=Returnmark::where('Product_id',$request->idvaule)->get();
if(count($dataget)>0){
  $datagetview=Returnmark::where('Product_id',$request->idvaule)->value('details');
}else{
  $datagetview='Not input this product reason';
}
return response()->json($datagetview);
  
}



public function testAnyurlfun(){
  $month= date('n');
  $year=date('Y');
  
  $sale_list=DB::table('purches_list')
  ->where('Outlet_Id',Auth::user()->ShopID)
  ->whereYear('Return_recived_date', $year)
  ->whereMonth('Return_recived_date', $month)
  ->where('return_product','>', 0)
  ->get();

 
 dd($sale_list);
}

    }
    