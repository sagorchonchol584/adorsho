<?php

namespace App\Http\Controllers\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Transaction;

class CashflowControllor extends Controller
{
   
    public function cashflowfun(){
        return view('deshboard.cash_flow');
    }
  
      public function expence_add_func(Request $reqs){
     
          
          $ShopID = Auth::user()->ShopID;
          $stratf_id = Auth::user()->id;
          $adminCat = Auth::user()->AdminCat;
    
      
          $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
          
          if(count($cash_flow_data) > 0){	
          foreach($cash_flow_data as $row)
          {
          $cashAount=$row->cash_credit;
          $cashdebit=$row->cash_debit;
          }
      
          if($cashAount>=$reqs->tk){
            $cash_flow['cash_credit']=$cashAount-$reqs->tk;
           }else{
            $cash_flow['cash_credit']=$cashAount;
           }
          $cash_flow['details']='Next Sale data loaded';
          $cash_flow['Update_date']=date("Y-m-d");
          $cash_flow['cash_debit']=$cashdebit+$reqs->tk;
      
         
          DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);    
          echo json_encode($cash_flow);	
          
         
    
        $cashflow['Outlet_id']=$ShopID; 
        $cashflow['Admincat']=$adminCat; 
        $cashflow['debit_tk']=$reqs->tk; 
        $cashflow['date']=date("Y-m-d");
        $cashflow['Update_Date']=date("Y-m-d"); 	
        $cashflow['Admin_show_date']=date("Y-m-d"); 
        $cashflow['stratf_id']=$stratf_id; 
        $cashflow['details']=$reqs->selectvale;
        $cashflow['Ac_check']=0; 
        $cashflow['expend_cost']=1;
    
        if($adminCat=="Admin"){
          $cashflow['admin_show']=1; 
       
         }else{
          $cashflow['admin_show']=0; 
      
         }
    
        $cashflow['supplier_id']=0; 
        $cashflow['Name']=Auth::user()->Name; 
        DB::table('cash_flow_cost_info')->insert($cashflow);  


        // this is for transaction monitor by any personal 
  $details='Expence add by '.Auth::user()->Name.' insert form '.$reqs->selectvale;
  // this way to indenty for debit==0, credit==1; this insurt data for all transaction
  Transaction::create(['details' => $details,'amount_catagorise' => 0, 'amount_trans' => $reqs->tk,'shop_id' => $ShopID, 'shatf_id' => $stratf_id]);


        }
    
       }
       
    
      public function get_data_to_cash_sent_func($id){
   
      $ShopID = Auth::user()->ShopID;
      $statechek = Auth::user()->AdminCat;
      $stratf_id = Auth::user()->id;
      $stratf_name = Auth::user()->Name;
      $cashcash_credit_get=0;
      $cashcash_credit=0;
      $cashcash_debit=0;
      $cashcash_debit_trans=0;
      $getname="";
      $nameget='';
      $nameget_id='';
  
      $cash_flow_cost_info_get=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id )->where('Outlet_id', $ShopID)->where('Ac_check', 0)->get();	
  
      $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
  
       $users=DB::table('users')->where('id',$id )->get();	
  
      //this is paramiter id get to quary so to needs two quary
      $cash_get_pre_id=DB::table('cash_flow')->where('Starf_Id',$id )->where('Outlet_Id', $ShopID)->get();	
    
      if(count($cash_flow_data) > 0){	
        foreach($cash_flow_data as $rowc)
        {
        $cashcash_credit=$rowc->cash_credit;
        $cashcash_debit=$rowc->cash_debit;
        }
      }
  
  
      if(count($cash_get_pre_id) > 0){	
        foreach($cash_get_pre_id as $rowc)
        {
        $cashcash_credit_get=$rowc->cash_credit;
        $cashcash_debit_get=$rowc->cash_debit;
        $getname=$rowc->Starf_Name;
        }
      }
  
  
      if(count($cash_flow_cost_info_get) > 0){	
        foreach($cash_flow_cost_info_get as $row)
        {
  
       $cashcash_debit_tk=$row->debit_tk;
       $cash_flow_cost['Ac_check']=1;
       DB::table('cash_flow_cost_info')->where('id',$row->id)->update($cash_flow_cost);
        }
      }
  
  
      if(count($users) > 0){	
        foreach($users as $row)
        {
          $nameget=$row->Name;
          $nameget_id=$row->id;
        }
      }
  
  
     
      //id			cash_credit				
  
      $cash_sent['Outlet_id']=$ShopID;
      $cash_sent['Starf_Name']=$stratf_name ;
      $cash_sent['Starf_Id']=$stratf_id;
      $cash_sent['cash_credit']=$cashcash_credit;
      $cash_sent['cash_debit']=$cashcash_debit;
      $cash_sent['date']=date("Y-m-d");
      $cash_sent['Admin_show_date']=date("Y-m-d");
      $cash_sent['confrm_access']=0;
  
      if($statechek=="Admin"){
        $cash_sent['admin_show']=1;
      }else{
        $cash_sent['admin_show']=0;
      }
      
      $cash_sent['Sent_Starf_id']=$id;
      $cash_sent['Sender_Name']=$nameget;
      
      $resultt=DB::table('cash_sent_any_person')->insert($cash_sent);   
      echo json_encode($cash_sent);
  
  
  if($resultt==1){
    $cash_flow['cash_credit']=0;
    $cash_flow['cash_debit']=0;
    $cash_flow['sent_confim']=1;
    $cash_flow['Update_date']=date("Y-m-d");
    $cash_flow['cash_mark']="Sent Cash";
    $cash_flow['cash_provider_name']=$getname;
    DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);  
  
    $cash_flow_get['cash_credit']=$cashcash_credit_get+$cashcash_credit;
    $cash_flow_get['Update_date']=date("Y-m-d");
    $cash_flow_get['cash_mark']="Get Cash";
    $cash_flow_get['cash_provider_name']=$stratf_name;
    $cash_flow_get['notifi_meg']=1;
    DB::table('cash_flow')->where('Starf_Id',$id)->where('Outlet_Id', $ShopID)->update($cash_flow_get); 
  
  
  
  
  
  
    $cash_flow_cost_info['Ac_check']=1;
    DB::table('cash_flow_cost_info')->where('Outlet_id', $ShopID)->where('stratf_id', $stratf_id)->update($cash_flow_cost_info);
       
  
    $users_upadate['Notifi_meg']=1;
    DB::table('users')->where('id',$id)->update($users_upadate); 
  
    $profit_datails['show_key']=1;
    DB::table('profit_datails')->where('Outlet_Id', $ShopID)->where('Starf_Id', $stratf_id)->update($profit_datails);
        
    $users_upadate['Notifi_meg']=1;
    DB::table('users')->where('id',$id)->update($users_upadate); 

  }

  // this is for transaction monitor by any personal 
  $details='Balance Transfer by '.Auth::user()->Name.' to  '.$nameget.' because Balance close for todays ';
  // this way to indenty for debit==0, credit==1; update==2 this insurt data for all transaction
  Transaction::create(['details' => $details,'amount_catagorise' => 0, 'amount_trans' => $cashcash_credit,'shop_id' => $ShopID, 'shatf_id' => $stratf_id]);

  //echo json_encode('transaction');	

// this is for transaction monitor by any personal 
$detailsa='Balance Transfer by '.$nameget.' to  '.Auth::user()->Name.' because Balance close for todays ';
// this way to indenty for debit==0, credit==1; update==2 this insurt data for all transaction
Transaction::create(['details' => $detailsa,'amount_catagorise' => 1, 'amount_trans' => $cashcash_credit,'shop_id' => $ShopID, 'shatf_id' =>$nameget_id]);





     }
   
  
      public function expence_update_func(Request $reqs){
   
      $ShopID = Auth::user()->ShopID;
      $stratf_id = Auth::user()->id;
      $adminCat = Auth::user()->AdminCat;
      $cashdebitupdate=0;
      $cashdebitupdatedata=0;
      $cashdebitupdateaddtrans=0;
      $expenceupdate=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $reqs->id)->get();
      $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
  
      if(count($expenceupdate) > 0){	
        foreach($expenceupdate as $rowc)
        {
       // $cashAount=$row->cash_credit;
        $cashdebitupdateadd=$rowc->debit_tk;
        }

        $cashdebitupdateaddtrans=$cashdebitupdateadd;
        $cashdebitupdate=$cashdebitupdateadd-$reqs->tk;
  
        if($cashdebitupdate>0){
          $cashdebitupdatedata=$cashdebitupdate*1;
        }else{
          $cashdebitupdatedata=$cashdebitupdate*-1;
        }
        
       
      }else{

        
      }
  
      echo json_encode($reqs->id);	
      
      
      if(count($cash_flow_data) > 0){	
      foreach($cash_flow_data as $row)
      {
      $cashAount=$row->cash_credit;
      $cashdebit=$row->cash_debit;
      }
  
      if($cashAount>=$reqs->tk){
        $cash_flow['cash_credit']=$cashAount-$reqs->tk;
       }else{
        $cash_flow['cash_credit']=$cashAount;
       }
  
       if($cashdebitupdate>0){
        $cash_flow['cash_debit']=$cashdebit-$cashdebitupdatedata;
        $cash_flow['cash_credit']=$cashAount+$cashdebitupdatedata;
      }else{
        $cash_flow['cash_debit']=$cashdebit+$cashdebitupdatedata;
        $cash_flow['cash_credit']=$cashAount-$cashdebitupdatedata;
      }
  
  
      $cash_flow['details']='Last is update data';
      $cash_flow['Update_date']=date("Y-m-d");
     DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);    
  
  
    $cashflow['debit_tk']=$reqs->tk; 
    $cashflow['Update_Date']=date("Y-m-d"); 	
    $cashflow['details']=$reqs->selectvale;
    DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $reqs->id)->update($cashflow);  
  
   }   
  

    // this is for transaction monitor by any personal 
    $details='Expence Update add by '.Auth::user()->Name.' insert form '.$reqs->selectvale.' befor amount was '.$cashdebitupdateaddtrans;
    // this way to indenty for debit==0, credit==1; update==2 this insurt data for all transaction
    Transaction::create(['details' => $details,'amount_catagorise' => 2, 'amount_trans' => $reqs->tk,'shop_id' => $ShopID, 'shatf_id' => $stratf_id]);
  
    echo json_encode($cashdebitupdateaddtrans);	

  
     }
   
  
     
     public function cashflowstates(){
  
    
       $output = '';
       $outputpayable = '';
       $outputlog='';
       $selectid='';
       $cash_sent_any_person_log='';
       $cash_sent_any_person_show='';
       $monthy_suppier_exps_tk=0;
       $today_suppier_exps_tk=0;
       $today_expence_tk=0;
       $today_return_tk=0;
       $total_pay_tk_months=0;
       $total_expence_tk_months=0;
       $total_return_tk_months=0;
       $cureentyears=date('Y');
       $curentmonths=date('m');
       $ShopID = Auth::user()->ShopID;
       $Starf_Id = Auth::user()->id;
       $admid_state = Auth::user()->AdminCat;
       $me="";
       $cash_flow=0;
       $Total_salestk=0;
       $admin_not_show_dat=0;
       $total_show_Not_fun=0;
       $monthy_expence_fun=0;
       $extra_monthy_suppier_exps=0;
  
       if(Auth::user()->AdminCat=="Admin"){
      
  
  
  //-------------------thsi  a payable system-----------------------
  $datapayable = DB::table('suppile_info')->where('ShopID', $ShopID)->where('admin_show', 1)->get();
  $total_row_payable = $datapayable->count();
  
  //-------------------this cash_flow_cost_info------------------------
  
  $datas = DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)
  ->whereBetween('date', [
      Carbon::now()->startOfMonth(), 
      Carbon::now()->endOfMonth()
  ])->limit(100)->orderBy('id', 'DESC')->get();
 
  $total_row_log = $datas->count();
  
        //----thhis cah show api  
      $cashflow = DB::table('cash_flow')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->get();
      $cashflow_data_row = $cashflow->count();
  
  
      $dataexpence = DB::table('cash_flow_cost_info')->where('Outlet_id', $ShopID)->where('stratf_id', $Starf_Id)->where('admin_show', 1)->get();
      $cash_flow_cost_info_data= $dataexpence->count();
  
      $cash_sent_any_person = DB::table('cash_sent_any_person')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->orWhere('Sent_Starf_id', $Starf_Id)->orderBy('id', 'DESC')->get();
      $cash_sent_any_person_all = $cash_sent_any_person->count();
   
   
  
  
    }else{
         
        
  //-------------------thsi  a payable system-----------------------
        $dataexpence = DB::table('cash_flow_cost_info')->where('Outlet_id', $ShopID)->where('stratf_id', $Starf_Id)->where('admin_show', 1)->get();
        $cash_flow_cost_info_data = $dataexpence->count();
  
  //-------------------this cash_flow_cost_info------------------------
  
        $datas = DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('stratf_id', $Starf_Id)
        ->whereBetween('date', [
            Carbon::now()->startOfMonth(), 
            Carbon::now()->endOfMonth()
        ])->limit(100)->orderBy('id', 'DESC')->get();
        $total_row_log = $datas->count();
  
  
     //----thhis cah show api
     $cashflow = DB::table('cash_flow')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->get();
     $cashflow_data_row = $cashflow->count();
  
  
  
     //----thhis cah show api
     $cash_sent_any_person = DB::table('cash_sent_any_person')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->orWhere('Sent_Starf_id', $Starf_Id)->orderBy('id', 'DESC')->get();
     $cash_sent_any_person_all = $cash_sent_any_person->count();
  
     //->where('Starf_Id', $Starf_Id)->orWhere('Sent_Starf_id', $Starf_Id)
  
  
     
    }
  
  
  
    $assets_and_properity = DB::table('assets_and_properity')->where('Outlet_id', $ShopID)->get();
    $assets_and_properity_info_data = $assets_and_properity->count();
  
  if($assets_and_properity_info_data > 0){
    foreach($assets_and_properity as $dataget){
  
   
      $orderdate = explode('-',$dataget->Date);
      $month = $orderdate[1];
      $year  = $orderdate[0];
  
      if($year.$month===$cureentyears.$curentmonths){
        $extra_monthy_suppier_exps+=$dataget->Amount;
      }
    }
  }
  
  
  
     if($cashflow_data_row > 0)
       {
        foreach($cashflow as $row)
        {
          $cash_flow=$row->cash_credit;
        }
      }
  
  
  
         //-------------------thsi  a payable system-----------------------
          if($cash_flow_cost_info_data > 0){
            foreach($dataexpence as $row)
            {
  
              $orderdate = explode('-',$row->date);
              $month = $orderdate[1];
              $year  = $orderdate[0];
   
  
          if($row->Ac_check==0){
  
          if($row->expend_cost===0){
            $today_suppier_exps_tk+=$row->debit_tk;
           }
           else if($row->expend_cost===1)
           {
            $today_expence_tk+=$row->debit_tk;
           }else{
            $today_return_tk+=$row->debit_tk;
           }
        
          }else{
  
            if($year.$month===$cureentyears.$curentmonths){
  
            //  echo json_encode($year.$month.'add'.$cureentyears.$curentmonths);
            //  echo json_encode($row->debit_tk);
  
              if($row->expend_cost===0){
                $monthy_suppier_exps_tk+=$row->debit_tk;
               }else if($row->expend_cost===1){
                $total_expence_tk_months+=$row->debit_tk;
               }else{
                $total_return_tk_months+=$row->debit_tk;
               }
  
             }
  
             
          }
  
            $monthy_expence_fun+=$row->debit_tk;
            
            }
          }
          else
          { 
            $outputpayable ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
            $output ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
          }
  
  
        //-------------------this suppile_info_log------------------------
          
            if($total_row_log > 0)
            {
             foreach($datas as $row)
             {
              $adminshow="";
              $dddcash="";
              $mesadd="";
              $toDate = Carbon::parse($row->date);
              $fromDate = Carbon::parse(date("Y-m-d"));
              $days = $toDate->diffInDays($fromDate);
              
          if($days==0){
            $mesadd="Today";
           }else{
            $mesadd=$days." Days";
           }
      
           if($row->admin_show == 1){
            $adminshow='<span style=color:green;><i class="bx bx-check  bx-sm"></i></span>';
            $dddcash='<span style=color:green;><i class="bx bx-check bx-sm"> <i class="bx bx-edit bx-sm" onclick="updatedata('.$row->id.')"></i><span style=color:red; onclick="deletdata('.$row->id.')"><i class="bx bxs-x-circle bx-sm" ></i></span>';
          
          }else{
            $admin_not_show_dat++;
            $adminshow='<span style=color:red; onclick="updatedata('.$row->id.')"><i class="bx bx-edit bx-sm" ></i></span> <span style=color:red; onclick="deletdata('.$row->id.')"><i class="bx bxs-x-circle bx-sm" ></i></span>';
            $dddcash='<input type="checkbox" id="cashfun" value="'. $row->id.'">';
           }
  
          
       
  
  
           if(Auth::user()->AdminCat=="Admin"){
            $outputlog.= '
            <tr>
            <td>'.$row->Name.'</td>
            <td>'.$row->details.'</td>
            <td>'.$mesadd.'</td>      
            <td>'.$row->debit_tk.'</td>  
            <td>'.$dddcash.'</td>  
            
           </tr>
           ';
             }else{
              $outputlog.= '
              <tr>
              <td>'.$row->details.'</td>
              <td>'.$row->date.'</td>
              <td>'.$mesadd.'</td>      
              <td>'.$row->debit_tk.'</td>  
              <td>'.$adminshow.'</td> 
             </tr>
             ';
             }
  
  
  
             }
            }
            else
            { 
              $outputlog ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
            }
            
  
  
        
            $tk_show=DB::table('profit_datails')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->get();
            foreach($tk_show as $row)
            {
              if($row->show_key==0){
                $Total_salestk+=$row->Total_sales;
               }
             
            // $salesproduct++;
        
            $orderdate = explode('-',$row->Date);
            $month = $orderdate[1];
            $year  = $orderdate[0];
           if($year.$month===$cureentyears.$curentmonths){
               $total_show_Not_fun+=$row->Total_sales;
              }
  
            }
      
            
            $datapayable = DB::table('users')->where('ShopID', $ShopID)->get();
            $total_row_payable = $datapayable->count();
            if($total_row_payable > 0)
            $selectid.='<option id="users" value="0" selected>--Selected Person--</option>';
            {
             foreach($datapayable as $row)
             {
  
              if($row->id==$Starf_Id){
               // $selectid.='<option id="users" value="'.$row->id.'">'.$row->Name.'</option>';
              }else{
                $selectid.='<option id="users" value="'.$row->id.'">'.$row->Name.'</option>';
              }
             }
            // $selectid.='<option id="users" value="end">Today is Closed</option>';
            }
  
  
  
  
  
  
         //-------------------cash_sent_any_person_all------------------------
          
                  if($cash_sent_any_person_all > 0)
                  {
                    
                   foreach($cash_sent_any_person as $row)
                   {
  
                   $adminshow="";
                    $dddcash="";
                    $mesadd="";
                    $nameshow="";
                    $balanceshow="";
                    $toDate = Carbon::parse($row->date);
                    $fromDate = Carbon::parse(date("Y-m-d"));
                    $days = $toDate->diffInDays($fromDate);
                    
                 if($days==0){
                  $mesadd="Today";
                 }else{
                  $mesadd=$days." Days";
                 }
            
                 if($row->confrm_access == 1){
                  $adminshow='<span style=color:green;>completed</i></span>';
                 // $dddcash='<span style=color:green;><i class="bx bx-check bx-sm"> <i class="bx bx-edit bx-sm" onclick="updatedata('.$row->id.')"></i><span style=color:red; onclick="deletdata('.$row->id.')"><i class="bx bxs-x-circle bx-sm" ></i></span>';
                
                }else{
                  $adminshow='<span style=color:red;">Pending...</span>';
                //  $dddcash='<input type="checkbox" id="cashfun" value="'. $row->id.'">';
                 }
        
  
                 if($row->Starf_Id == $Starf_Id){
  
                  $nameshow=$row->Sender_Name;
                  $balanceshow='<span style=color:red;>-'.$row->cash_credit.'</i></span>';
                 }else{
                  $nameshow=$row->Starf_Name;
                  $balanceshow='<span style=color:green;>+'.$row->cash_credit.'</i></span>';
                 }
  
        
                 if(Auth::user()->AdminCat=="Admin"){
                  $cash_sent_any_person_log.= '
                  <tr>
                  <td>'.$nameshow.'</td>
                  <td>'.$mesadd.'</td>  
                  <td>'.$balanceshow.'</td>  
                  <td>'.$adminshow.'</td>   
                 </tr>
                 ';
                   }else{
                    $cash_sent_any_person_log.= '
                    <tr>
                    <td>'.$nameshow.'</td>
                    <td>'.$mesadd.'</td>      
                    <td>'.$balanceshow.'</td>  
                    <td>'.$adminshow.'</td> 
                   </tr>
                   ';
                   }
  
  
                  if($row->confrm_access == 0){
  
                    if(Auth::user()->AdminCat=="Admin"){
                      $cash_sent_any_person_show.= '
                      <tr>
                      <td>'.$nameshow.'</td>
                      <td>'.$mesadd.'</td>  
                      <td>'.$balanceshow.'</td>  
                     
                     </tr>
                     ';
                       }else{
                        $cash_sent_any_person_show.= '
                        <tr>
                        <td>'.$nameshow.'</td>
                        <td>'.$mesadd.'</td>      
                        <td>'.$balanceshow.'</td>  
                       
                       </tr>
                       ';
                       }
  
                  }
  
            
                }
  
                  }
                  else
                  { 
                    $cash_sent_any_person_log ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
                  }
                  
  



  
          $data = array(
          'table_data'  =>$output,
          'not_show_admin'  => $admin_not_show_dat,
          'payable'=>$outputpayable,
          'monthy_suppier_exps' => $monthy_suppier_exps_tk,
          'today_suppier_exps' => $today_suppier_exps_tk,
          'today_expence_tk' => $today_expence_tk,
          'today_return_tk' => number_format($today_return_tk),
          'months_pay' => $total_pay_tk_months,
          'cashflow_log' =>$outputlog,
          'monthy_expence' => $total_expence_tk_months,
          'monthy_return' => number_format($total_return_tk_months),
          'cash_crdits' => $cash_flow,
          'totalsates' => $Total_salestk,
          'setectvalue' => $selectid,
          'total_show_Not_fun' => $total_show_Not_fun,
          'monthy_expence_fun' => $monthy_expence_fun, 
          'cash_sent_any_person_log' => $cash_sent_any_person_log,
          'cash_sent_any_person_show' => $cash_sent_any_person_show,
          'extra_monthy_suppier_exps' => $extra_monthy_suppier_exps,
        );
  
  
          echo json_encode($data);
     
        
      
     }
  
  
     public function get_data_to_update_func($id){
   
      $ShopID = Auth::user()->ShopID;
      $statechek = Auth::user()->AdminCat;
  
      $showdata=DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('Admincat', $statechek)->where('expend_cost', 1)->where('id', $id)->get();
      $data_count=$showdata->count();
  
  
    if($data_count>0){
      foreach($showdata as $rows ){
        $data_sent=array("id"=>$rows->id,"datails"=>$rows->details,"debit_taka"=>$rows->debit_tk);
        echo json_encode($data_sent);
      }
    }else{
      $data_sent=array("message"=>'exitdata');
      echo json_encode($data_sent);
    
    }
     // echo json_encode($reqs->id);Admincat
  
     }
  
     
     public function get_data_to_delete_func($id){
     
      $ShopID = Auth::user()->ShopID;
      $statechek = Auth::user()->AdminCat;
      $stratf_id = Auth::user()->id;
      $expene_check=0;
      $supperiD=0;
      $which_data='';
    $info_check=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->get();

    if($info_check->count() > 0){
      foreach($info_check as $dataget){
        $expene_check= $dataget->expend_cost;
        $supperiD=$dataget->supplier_id;
        $which_data=$dataget->details;
      }

      
if($expene_check===1){
  
  $debit_tk=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->value('debit_tk');
  $cash_credit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_credit');	
  $cash_debit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_debit');	
  $cash_flowdat['cash_credit']=$cash_credit+$debit_tk;
  $cash_flowdat['cash_debit']=$cash_debit-$debit_tk;
  DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flowdat);   
  DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('Admincat', $statechek)->where('id', $id)->delete();
  $data_sent=array("message"=>'this is expences data');
  

 
   $details='Delete expence by '.Auth::user()->Name.' Where form '.$which_data;
  // this way to indenty for debit==0, credit==1; this insurt data for all transaction
  Transaction::create(['details' => $details,'amount_catagorise' => 1, 'amount_trans' => $debit_tk,'shop_id' => $ShopID, 'shatf_id' => $stratf_id]);
  echo json_encode($data_sent);
}else{

 
   $debit_tk=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->value('debit_tk');
  $cash_credit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_credit');	
  $cash_debit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_debit');	
  $cash_flowdat['cash_credit']=$cash_credit+$debit_tk;
  $cash_flowdat['cash_debit']=$cash_debit-$debit_tk;
  DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flowdat);   
  DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('Admincat', $statechek)->where('id', $id)->delete();


  $paymenttk_get=DB::table('suppile_info')->where('Stratf_id',$stratf_id)->where('ShopID', $ShopID)->where('id', $supperiD)->value('paymenttk');
   $payablek_get=DB::table('suppile_info')->where('Stratf_id',$stratf_id)->where('ShopID', $ShopID)->where('id', $supperiD)->value('payable');


  $suppile_info_data['payable']=$payablek_get+$debit_tk;
  $suppile_info_data['paymenttk']=$paymenttk_get-$debit_tk;
  $suppile_info_data['updated_at']=now();
  DB::table('suppile_info')->where('Stratf_id',$stratf_id)->where('ShopID', $ShopID)->where('id', $supperiD)->update($suppile_info_data);  


  $details='Delete supplier or payable balance by '.Auth::user()->Name.' Where form '.$which_data;
  // this way to indenty for debit==0, credit==1; this insurt data for all transaction
  Transaction::create(['details' => $details,'amount_catagorise' => 1, 'amount_trans' => $debit_tk,'shop_id' => $ShopID, 'shatf_id' => $stratf_id]);



  $data_sent=array("message"=>$suppile_info_data);
  echo json_encode($data_sent);
 

}



      // if($expene_check==1){

      //   $debit_tk=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->value('debit_tk');
      //    $cash_credit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_credit');	
      //    $cash_debit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_debit');	
      //    $cash_flowdat['cash_credit']=$cash_credit+$debit_tk;
      //    $cash_flowdat['cash_debit']=$cash_debit-$debit_tk;
      //    DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flowdat);   
      //    DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('Admincat', $statechek)->where('id', $id)->delete();
      //    $data_sent=array("message"=>'succesufull delete');
       
   
      // }
      // else
      // {
   
      //   $debit_tk=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->value('debit_tk');
      //    $cash_credit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_credit');	
      //    $cash_debit=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->value('cash_debit');	
      //    $cash_flowdat['cash_credit']=$cash_credit+$debit_tk;
      //    $cash_flowdat['cash_debit']=$cash_debit-$debit_tk;
      //    DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flowdat);   
      //    DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('Admincat', $statechek)->where('id', $id)->delete();
      //    $suppile_info=DB::table('suppile_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->value('supplier_id');
      //    $data_sent=array("message"=>'succesufull delete');
      //  }




    }
    else
    {
      $data_sent=array("message"=>0);
      echo json_encode($data_sent);

    }

     }
  


     public function get_data_to_delete_check($id){
     
      $ShopID = Auth::user()->ShopID;
      $stratf_id = Auth::user()->id;

    $debit_tk=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->value('debit_tk');

    if($debit_tk===null){
      $data_sent=array("message"=>0);
     
    }else{
      $data_sent=array("message"=>1);
    }

    echo json_encode($data_sent);
     }




}
