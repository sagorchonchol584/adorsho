<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Transaction;
class SupplierControllor extends Controller
{

    public function product_supplier(){
        if(Auth::check()){	
          $id = Auth::user()->id;	
        //  if()
       
         // $data['posts']=DB::table('users')->where('AdminKey',$id)->paginate(9);
          return view('management.supplier');
        }
        else{return view('login');}
    }
      


    public function suplier_list($id){
        if(Auth::check()){
          $output = '';
           $ShopID = Auth::user()->ShopID;
           $admin = Auth::user()->AdminCat;
           $Starf_Id = Auth::user()->id;
           $totaltks=0;
           $cash_flow=0;
      
           $data = DB::table('suppile_info_log')->where('Outlet_Id', $ShopID)->where('supplier_id', $id)->get();
           $total_row = $data->count();
             if($total_row > 0)
             {
              foreach($data as $row)
              {
               // $totaltks++;
             //  $ddd='<button class="supperbutton" onclick="datashowwite('.$row->id.')">'.$row->name.'</button>';
             $totaltks+=$row->Product_load_numer*$row->Purches_Price;
               $output.= '
               <tr>
               <td>'.$row->Product_name.'</td>
               <td>'.$row->Product_load_numer.'</td>
               <td>'.$row->Purches_Price.'</td>   
               <td style="text-align:right">'.$row->Product_load_numer*$row->Purches_Price.'</td> 
              </tr>
              ';   
              }
             }
             else
             { 
               $output ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
             }
      
      
      
             $data = array('table_data'  =>$output,'total_data'  => $totaltks,'admincat' => $admin);
             echo json_encode($data);
           }
      }   

    public function suplierstate(){

        if(Auth::check()){
           $output = '';
           $outputpayable = '';
           $outputlog='';
           $total_due_tk=0;
           $total_pay_tk_year=0;
           $total_pay_tk_months=0;      
           $total_payable_tk_months=0;
           $years=date('Y');
           $months=date('m');
           $ShopID = Auth::user()->ShopID;
           $Starf_Id = Auth::user()->id;
           $me="";
           $cash_flow=0;
           $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
      
      //----------------thsi show recently update data  uploaded--------
            $INVOICEDUE = DB::table('suppile_info')->where('ShopID', $ShopID)->where('admin_show', 0)->get();
            $total_row_count =  $INVOICEDUE->count();
      
      //-------------------thsi  a payable system-----------------------
            $datapayable = DB::table('suppile_info')->where('ShopID', $ShopID)->where('admin_show', 1)->get();
            $total_row_payable = $datapayable->count();
      
      //-------------------this suppile_info_log------------------------
            $datas = DB::table('suppile_info_log')->where('Outlet_Id', $ShopID)->where('Admin_show', 1)->limit(100)->orderBy('id', 'DESC')->get();
            $total_row_log = $datas->count();
      
      
      
         //----thhis cah show api
         $cashflow = DB::table('cash_flow')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->get();
         $cashflow_data_row = $cashflow->count();
      
         if($cashflow_data_row > 0)
           {
            foreach($cashflow as $row)
            {
              $cash_flow=$row->cash_credit;
            }
          }
      
      
      
      
            //----------------thsi show recently update data  uploaded---------------------------------------
            if($total_row_count > 0){
               foreach($INVOICEDUE as $row)
               {
                
              
                $total_due_tk+=$row->totaltk;
            
                $ddd='<button class="supperbutton" onclick="datashowwite('.$row->id.')">'.$row->company_name.'</button>';
                $namse='<button class="supperbutton" onclick="datashowwite('.$row->id.')">'.$row->name.'</button>';
      
              $mesadd="";
                $toDate = Carbon::parse($row->date);
                $fromDate = Carbon::parse(date("Y-m-d"));
                $days = $toDate->diffInDays($fromDate);
                
             if($days==0){
              $mesadd="Today";
             }else{
              $mesadd=$days." Days";
             }
        
        
                $output.= '
                <tr>
                <td>'.$ddd.'</td>
                <td>'.$namse .'</td>
                <td>'.$mesadd.'</td>
                <td>'.$row->unite.'</td>
                <td>'.$row->totaltk.'</td>
               </tr>
               ';
               }
              }
              else
              { 
                $output ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
              }
      
             //-------------------thsi  a payable system-----------------------
              if($total_row_payable > 0){
                foreach($datapayable as $row)
                {
      
          
                  $orderdate = explode('-',$row->date);
                  $month = $orderdate[1];
                  $year  = $orderdate[0];
              
           
                  if($year==$years){
                    $total_pay_tk_year+=$row->paymenttk;
                  }
         
                  if($year.$month==$years.$months){
                    $total_pay_tk_months+=$row->paymenttk;
                  }
                  $total_payable_tk_months+=$row->payable;
      
      
                if($row->payable>0){
      
      
                  $mesadd="";
                  $toDate = Carbon::parse($row->paymentdate);
                  $fromDate = Carbon::parse(date("Y-m-d"));
                  $days = $toDate->diffInDays($fromDate);
                  
               if($days==0){
                $mesadd="Today";
               }else{
                $mesadd=$days." Days";
               }
          
      
      
      
                  $dddoutputpayable='<button class="supperbutton" onclick="datashowpayable('.$row->id.','.$row->unite.','.$row->payable.','.$row->paymenttk.','.$row->totaltk.' )">'.$row->name.'</button>';
                  $outputpayable.= '
                  <tr>
                  <td>'.$dddoutputpayable.'</td>
                  <td>'.$row->unite.'</td>
                  <td>'.$row->paymenttk.'</td>
                  <td>'.$mesadd.'</td>
                  <td>'.$row->payable.'</td>
                 </tr>
                 ';
      
      
      
      
                }
                }
              }
              else
              { 
                $outputpayable ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
              }
      
      
            //-------------------this suppile_info_log------------------------
              
                if($total_row_log > 0)
                {
                 foreach($datas as $row)
                 {
                  $ddd='<img  src="'.$base_url.'/product/'.$row->Image.'" width="50" height="60">';
                 
                  $datae=$row->Product_load_numer;
                 
            
                  $outputlog.= '
                  <tr>
                  <td>'.$ddd.'</td>
                  <td>'.$row->Product_name.'</td>
                  <td>'.$row->Product_load_numer.'</td>
                  <td>'.$row->Purches_Price.'</td>   
             
                  <td><span class=" my-text-color"  data-price="'.$row->Purches_Price.'" data-name="'.$row->Product_name.'" data-units="'.$row->Product_load_numer.'" data-barcode="'.$row->Barcode.'" onClick="barcodeprint(this)"><i class="bx bx-barcode bx-md"></i></span></td> 
                 </tr>
                 ';
                 }
                }
                else
                { 
                  $outputlog ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
                }
                
      
      
      
      
              $data = array('table_data'  =>$output,
              'INVOICEDUE'  => $total_row_count,
              'payable'=>$outputpayable,
              'allduetk' => $total_due_tk,
              'year_pay' => $total_pay_tk_year,
              'months_pay' => $total_pay_tk_months,
              'supplier_log' =>$outputlog,
              'payableyear' => $total_payable_tk_months,
              'cash_crdits' => $cash_flow
            );
              echo json_encode($data);
         
            }
          
      
        }

//---this a function is when payable of supplier sime money pay then use ----route:  payabledataloaded------------
    public function Payable_finally(Request $reqs){
 
   

      $ShopID = Auth::user()->ShopID;
      $stratf_id = Auth::user()->id;
      $adminCat = Auth::user()->AdminCat;
      $transation_name='';
 
      $suppile_info = DB::table('suppile_info')->where('id', $reqs->id)->where('ShopID', $ShopID)->get();
      $total_row_suppile_info = $suppile_info->count();

      $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
   


      
      if($total_row_suppile_info > 0){

       foreach($suppile_info as $row)
       {
       $paymenttkamount=$row->paymenttk;
       $transation_name=$row->name;

      
       }

        $datess['admin_show']=1;  
        $datess['paymenttk']=$paymenttkamount+$reqs->tk;  
        $datess['paymentmethod']=$reqs->methedpay;  
        $datess['payable']=$reqs->payabletk;  
        $datess['paymentdate']=date("Y-m-d"); 
        $suppile_info_log['Admin_show']=1; 
  
        DB::table('suppile_info')->where('id', $reqs->id)->where('ShopID', $ShopID)->update($datess);

        DB::table('suppile_info_log')->where('id', $reqs->id)->where('Outlet_Id', $ShopID)->update($suppile_info_log);
       //----------------------this amount assets--------------
        if($reqs->methedpay=="other"){
         $assets['Outlet_id']=$ShopID;
         $assets['AdminCat']=$adminCat;
         $assets['Date']=date("Y-m-d");
         $assets['Info_update']=date("Y-m-d");
         $assets['Amount']=$reqs->tk;
         $assets['Amountdetails']="PayableOtherCash";
         $assets['supplier_id']=$reqs->id;
         DB::table('assets_and_properity')->insert($assets);
        }
        //----------------------this cash insert--------------
        $cashflow['Outlet_id']=$ShopID; 
        $cashflow['Admincat']=$adminCat; 
        $cashflow['debit_tk']=$reqs->tk; 
        $cashflow['date']=date("Y-m-d"); 
           $cashflow['Update_Date']=date("Y-m-d"); 
        $cashflow['Admin_show_date']=date("Y-m-d"); 
        $cashflow['stratf_id']=$stratf_id; 
        $cashflow['details']="Payable Cash"; 
        $cashflow['Ac_check']=0; 
        $cashflow['expend_cost']=0;

        if($adminCat=="Admin"){
         $cashflow['admin_show']=1; 
         
        }else{
         $cashflow['admin_show']=0; 
        
        }

        $cashflow['supplier_id']=$reqs->id; 
        $cashflow['Name']=Auth::user()->Name;    
       DB::table('cash_flow_cost_info')->insert($cashflow); 
      //----------------------this cash insert end--------------



      //----------------------this insert cash flow system--------------
      if(count($cash_flow_data) > 0){				
      
         foreach($cash_flow_data as $row)
          {
          $cashAount=$row->cash_credit;
          $cashdebit=$row->cash_debit;
          }
        //  $cash_flow['cash_credit']=$cashAount-$reqs->tk; 
          if($cashAount>=$reqs->tk){
           $cash_flow['cash_credit']=$cashAount-$reqs->tk;
          }else{
           $cash_flow['cash_credit']=$cashAount;
          }

     $cash_flow['details']='Next Sale data loaded';
     $cash_flow['Update_date']=date("Y-m-d");
     $cash_flow['cash_debit']=$cashdebit+$reqs->tk;

 
     if($reqs->methedpay=="cashdrawer"){
       DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);    
       echo json_encode("cash flow data show");	
     }
         
     }else{

    $cash_flow['date']=date("Y-m-d");
    $cash_flow['cash_credit']=0;
    $cash_flow['cash_provider_name']='Cash not Sent';
    $cash_flow['details']='NetSales';
    $cash_flow['cash_debit']=$reqs->tk;
    $cash_flow['Outlet_Id']=Auth::user()->ShopID; 
    $cash_flow['Starf_Name']=Auth::user()->Name; 
    $cash_flow['Starf_Id']=Auth::user()->id; 
    
    if($adminCat=="Admin"){
     $cash_flow['admin_show']=1;
    }else{
     $cash_flow['admin_show']=0;
    }

    $cash_flow['sent_confim']=0;
    $cash_flow['Admin_show_date']=date("Y-m-d");
    $cash_flow['Update_date']=date("Y-m-d");
    $cash_flow['cash_mark']="No mark";
    $cash_flow['notifi_meg']=0;
    DB::table('cash_flow')->insert($cash_flow);    	
    //echo json_encode($cash_flow_data);	

     }
    //----------------------this insert cash flow system  end--------------

     //  echo json_encode($datess);
       }
   
  
        
       
  // this is for transaction monitor by any personal 
  $details='Supplier payable amount Transfer by '.Auth::user()->Name.' to  '.$transation_name.' before stock add ';
  // this way to indenty for debit==0, credit==1; update==2 this insurt data for all transaction
  Transaction::create(['details' => $details,'amount_catagorise' => 0, 'amount_trans' => $reqs->tk,'shop_id' => $ShopID, 'shatf_id' => $stratf_id]);

  //echo json_encode('transaction');	


    } 

}
