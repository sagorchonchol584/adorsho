<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Catagury;
use App\Models\Systeminfom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Carbon\Carbon;


class Postcontroller extends Controller
{


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
  
public function chackingfuntwo(Request $reqs){

$test=array('test'=>$reqs->catagory_name);
echo json_encode($test);
$pizza  = $reqs->catagory_name;

}




public function show_sent_tk_details(){

  $ShopID = Auth::user()->ShopID;
  $admin = Auth::user()->AdminCat;
  $Starf_Id = Auth::user()->id;
  $output=0;
  $data = DB::table('cash_sent_any_person')->where('Outlet_id', $ShopID)->where('Sent_Starf_id', $Starf_Id)->where('confrm_access',0)->get();
  $total_row = $data->count();

  if($total_row > 0)
  {
   foreach($data as $row)
   {
   
    $output.= '
    <tr>
    <td>'.$row->Starf_Name.'</td>
    <td>'.$row->cash_credit.'</td>
    <td>'.$row->date.'</td>   
   </tr>
   ';   
   }
   $data = array('table_row'=>$output,'Starf_Name'=>$row->Starf_Name,'date'=>$row->date);
   
   echo json_encode($data);
  }


 
  
  
}
  


//--------this function is show pop alert data get payment info, but not payemnt-------route name:supplierlist
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






// public function cashflowstates(){

//   if(Auth::check()){
//      $output = '';
//      $outputpayable = '';
//      $outputlog='';
//      $selectid='';
//      $cash_sent_any_person_log='';
//      $cash_sent_any_person_show='';
//      $monthy_suppier_exps_tk=0;
//      $today_suppier_exps_tk=0;
//      $today_expence_tk=0;
//      $total_pay_tk_months=0;
//      $total_expence_tk_months=0;
//      $cureentyears=date('Y');
//      $curentmonths=date('m');
//      $ShopID = Auth::user()->ShopID;
//      $Starf_Id = Auth::user()->id;
//      $admid_state = Auth::user()->AdminCat;
//      $me="";
//      $cash_flow=0;
//      $Total_salestk=0;
//      $admin_not_show_dat=0;
//      $total_show_Not_fun=0;
//      $monthy_expence_fun=0;
//      $extra_monthy_suppier_exps=0;

//      if(Auth::user()->AdminCat=="Admin"){
    


// //-------------------thsi  a payable system-----------------------
// $datapayable = DB::table('suppile_info')->where('ShopID', $ShopID)->where('admin_show', 1)->get();
// $total_row_payable = $datapayable->count();

// //-------------------this cash_flow_cost_info------------------------

// $datas = DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)
// ->whereBetween('date', [
//     Carbon::now()->startOfMonth(), 
//     Carbon::now()->endOfMonth()
// ])->limit(100)->orderBy('id', 'DESC')->get();
// $total_row_log = $datas->count();


//       //----thhis cah show api  
//     $cashflow = DB::table('cash_flow')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->get();
//     $cashflow_data_row = $cashflow->count();


//     $dataexpence = DB::table('cash_flow_cost_info')->where('Outlet_id', $ShopID)->where('stratf_id', $Starf_Id)->where('admin_show', 1)->get();
//     $cash_flow_cost_info_data= $dataexpence->count();

//     $cash_sent_any_person = DB::table('cash_sent_any_person')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->orWhere('Sent_Starf_id', $Starf_Id)->orderBy('id', 'DESC')->get();
//     $cash_sent_any_person_all = $cash_sent_any_person->count();
 
 


//   }else{
       
      
// //-------------------thsi  a payable system-----------------------
//       $dataexpence = DB::table('cash_flow_cost_info')->where('Outlet_id', $ShopID)->where('stratf_id', $Starf_Id)->where('admin_show', 1)->get();
//       $cash_flow_cost_info_data = $dataexpence->count();

// //-------------------this cash_flow_cost_info------------------------

//       $datas = DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('stratf_id', $Starf_Id)
//       ->whereBetween('date', [
//           Carbon::now()->startOfMonth(), 
//           Carbon::now()->endOfMonth()
//       ])->limit(100)->orderBy('id', 'DESC')->get();
//       $total_row_log = $datas->count();


//    //----thhis cah show api
//    $cashflow = DB::table('cash_flow')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->get();
//    $cashflow_data_row = $cashflow->count();



//    //----thhis cah show api
//    $cash_sent_any_person = DB::table('cash_sent_any_person')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->orWhere('Sent_Starf_id', $Starf_Id)->orderBy('id', 'DESC')->get();
//    $cash_sent_any_person_all = $cash_sent_any_person->count();

//    //->where('Starf_Id', $Starf_Id)->orWhere('Sent_Starf_id', $Starf_Id)


   
//   }



//   $assets_and_properity = DB::table('assets_and_properity')->where('Outlet_id', $ShopID)->get();
//   $assets_and_properity_info_data = $assets_and_properity->count();

// if($assets_and_properity_info_data > 0){
//   foreach($assets_and_properity as $dataget){

 
//     $orderdate = explode('-',$dataget->Date);
//     $month = $orderdate[1];
//     $year  = $orderdate[0];

//     if($year.$month===$cureentyears.$curentmonths){
//       $extra_monthy_suppier_exps+=$dataget->Amount;
//     }
//   }
// }



//    if($cashflow_data_row > 0)
//      {
//       foreach($cashflow as $row)
//       {
//         $cash_flow=$row->cash_credit;
//       }
//     }



//        //-------------------thsi  a payable system-----------------------
//         if($cash_flow_cost_info_data > 0){
//           foreach($dataexpence as $row)
//           {

//             $orderdate = explode('-',$row->date);
//             $month = $orderdate[1];
//             $year  = $orderdate[0];
 

//         if($row->Ac_check==0){

//         if($row->expend_cost==0){
//           $today_suppier_exps_tk+=$row->debit_tk;
//          }
//          else
//          {
//           $today_expence_tk+=$row->debit_tk;
//          }

//         }else{

//           if($year.$month===$cureentyears.$curentmonths){

//             if($row->expend_cost==0){
//               $monthy_suppier_exps_tk+=$row->debit_tk;
//              }else{
//               $total_expence_tk_months+=$row->debit_tk;
//              }

//            }

           
//         }

//           $monthy_expence_fun+=$row->debit_tk;
          
//           }
//         }
//         else
//         { 
//           $outputpayable ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
//           $output ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
//         }


//       //-------------------this suppile_info_log------------------------
        
//           if($total_row_log > 0)
//           {
//            foreach($datas as $row)
//            {
//             $adminshow="";
//             $dddcash="";
//             $mesadd="";
//             $toDate = Carbon::parse($row->date);
//             $fromDate = Carbon::parse(date("Y-m-d"));
//             $days = $toDate->diffInDays($fromDate);
            
//          if($days==0){
//           $mesadd="Today";
//          }else{
//           $mesadd=$days." Days";
//          }
    
//          if($row->admin_show == 1){
//           $adminshow='<span style=color:green;><i class="bx bx-check  bx-sm"></i></span>';
//           $dddcash='<span style=color:green;><i class="bx bx-check bx-sm"> <i class="bx bx-edit bx-sm" onclick="updatedata('.$row->id.')"></i><span style=color:red; onclick="deletdata('.$row->id.')"><i class="bx bxs-x-circle bx-sm" ></i></span>';
        
//         }else{
//           $admin_not_show_dat++;
          
//           $adminshow='<span style=color:red; onclick="updatedata('.$row->id.')"><i class="bx bx-edit bx-sm" ></i></span> <span style=color:red; onclick="deletdata('.$row->id.')"><i class="bx bxs-x-circle bx-sm" ></i></span>';
//           $dddcash='<input type="checkbox" id="cashfun" value="'. $row->id.'">';
//          }

        
     


//          if(Auth::user()->AdminCat=="Admin"){
//           $outputlog.= '
//           <tr>
//           <td>'.$row->Name.'</td>
//           <td>'.$row->details.'</td>
//           <td>'.$mesadd.'</td>      
//           <td>'.$row->debit_tk.'</td>  
//           <td>'.$dddcash.'</td>  
          
//          </tr>
//          ';
//            }else{
//             $outputlog.= '
//             <tr>
//             <td>'.$row->details.'</td>
//             <td>'.$row->date.'</td>
//             <td>'.$mesadd.'</td>      
//             <td>'.$row->debit_tk.'</td>  
//             <td>'.$adminshow.'</td> 
//            </tr>
//            ';
//            }



//            }
//           }
//           else
//           { 
//             $outputlog ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
//           }
          


      
//           $tk_show=DB::table('profit_datails')->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->get();
//           foreach($tk_show as $row)
//           {
//             if($row->show_key==0){
//               $Total_salestk+=$row->Total_sales;
//              }
           
//           // $salesproduct++;
      
//           $orderdate = explode('-',$row->Date);
//           $month = $orderdate[1];
//           $year  = $orderdate[0];
//          if($year.$month===$cureentyears.$curentmonths){
//              $total_show_Not_fun+=$row->Total_sales;
//             }

//           }
    
          
//           $datapayable = DB::table('users')->where('ShopID', $ShopID)->get();
//           $total_row_payable = $datapayable->count();
//           if($total_row_payable > 0)
//           $selectid.='<option id="users" value="0" selected>--Selected Person--</option>';
//           {
//            foreach($datapayable as $row)
//            {

//             if($row->id==$Starf_Id){
//              // $selectid.='<option id="users" value="'.$row->id.'">'.$row->Name.'</option>';
//             }else{
//               $selectid.='<option id="users" value="'.$row->id.'">'.$row->Name.'</option>';
//             }
//            }
//           // $selectid.='<option id="users" value="end">Today is Closed</option>';
//           }






//        //-------------------cash_sent_any_person_all------------------------
        
//                 if($cash_sent_any_person_all > 0)
//                 {
                  
//                  foreach($cash_sent_any_person as $row)
//                  {

//                  $adminshow="";
//                   $dddcash="";
//                   $mesadd="";
//                   $nameshow="";
//                   $balanceshow="";
//                   $toDate = Carbon::parse($row->date);
//                   $fromDate = Carbon::parse(date("Y-m-d"));
//                   $days = $toDate->diffInDays($fromDate);
                  
//                if($days==0){
//                 $mesadd="Today";
//                }else{
//                 $mesadd=$days." Days";
//                }
          
//                if($row->confrm_access == 1){
//                 $adminshow='<span style=color:green;>completed</i></span>';
//                // $dddcash='<span style=color:green;><i class="bx bx-check bx-sm"> <i class="bx bx-edit bx-sm" onclick="updatedata('.$row->id.')"></i><span style=color:red; onclick="deletdata('.$row->id.')"><i class="bx bxs-x-circle bx-sm" ></i></span>';
              
//               }else{
//                 $adminshow='<span style=color:red;">Pending...</span>';
//               //  $dddcash='<input type="checkbox" id="cashfun" value="'. $row->id.'">';
//                }
      

//                if($row->Starf_Id == $Starf_Id){

//                 $nameshow=$row->Sender_Name;
//                 $balanceshow='<span style=color:red;>-'.$row->cash_credit.'</i></span>';
//                }else{
//                 $nameshow=$row->Starf_Name;
//                 $balanceshow='<span style=color:green;>+'.$row->cash_credit.'</i></span>';
//                }

      
//                if(Auth::user()->AdminCat=="Admin"){
//                 $cash_sent_any_person_log.= '
//                 <tr>
//                 <td>'.$nameshow.'</td>
//                 <td>'.$mesadd.'</td>  
//                 <td>'.$balanceshow.'</td>  
//                 <td>'.$adminshow.'</td>   
//                </tr>
//                ';
//                  }else{
//                   $cash_sent_any_person_log.= '
//                   <tr>
//                   <td>'.$nameshow.'</td>
//                   <td>'.$mesadd.'</td>      
//                   <td>'.$balanceshow.'</td>  
//                   <td>'.$adminshow.'</td> 
//                  </tr>
//                  ';
//                  }


//                 if($row->confrm_access == 0){

//                   if(Auth::user()->AdminCat=="Admin"){
//                     $cash_sent_any_person_show.= '
//                     <tr>
//                     <td>'.$nameshow.'</td>
//                     <td>'.$mesadd.'</td>  
//                     <td>'.$balanceshow.'</td>  
                   
//                    </tr>
//                    ';
//                      }else{
//                       $cash_sent_any_person_show.= '
//                       <tr>
//                       <td>'.$nameshow.'</td>
//                       <td>'.$mesadd.'</td>      
//                       <td>'.$balanceshow.'</td>  
                     
//                      </tr>
//                      ';
//                      }

//                 }

          
//               }

//                 }
//                 else
//                 { 
//                   $cash_sent_any_person_log ='<tr><td align="center" colspan="5">No Data Found</td></tr>';
//                 }
                







//         $data = array('table_data'  =>$output,
//         'not_show_admin'  => $admin_not_show_dat,
//         'payable'=>$outputpayable,
//         'monthy_suppier_exps' => $monthy_suppier_exps_tk,
//         'today_suppier_exps' => $today_suppier_exps_tk,
//         'today_expence_tk' => $today_expence_tk,
//         'months_pay' => $total_pay_tk_months,
//         'cashflow_log' =>$outputlog,
//         'monthy_expence' => $total_expence_tk_months,
//         'cash_crdits' => $cash_flow,
//         'totalsates' => $Total_salestk,
//         'setectvalue' => $selectid,

//         'total_show_Not_fun' => $total_show_Not_fun,
//         'monthy_expence_fun' => $monthy_expence_fun, 
//         'cash_sent_any_person_log' => $cash_sent_any_person_log,
//         'cash_sent_any_person_show' => $cash_sent_any_person_show,
//         'extra_monthy_suppier_exps' => $extra_monthy_suppier_exps,
        

//       );
//         echo json_encode($data);
   
//       }
    
//   }
  
public function data_chack_to_sender_data_fun(){


  if(Auth::check()){
    $ShopID = Auth::user()->ShopID;
    $Starf_Id = Auth::user()->id;
  
   $cash_sent_any_person = DB::table('cash_sent_any_person')->where('confrm_access', 0)->where('Outlet_Id', $ShopID)->where('Starf_Id', $Starf_Id)->orWhere('Sent_Starf_id', $Starf_Id)->get();
   $cash_sent_any_person_all = $cash_sent_any_person->count();

   if($cash_sent_any_person_all > 0)
   {
    foreach($cash_sent_any_person as $row)
    {
      $dateload['confrm_access']="1"; 
      DB::table('cash_sent_any_person')->where('id', $row->id)->update($dateload);
    }
  
  }
 
  $dateloaddata['Notifi_meg']="0"; 
  DB::table('users')->where('ShopID', $ShopID)->where('id', $Starf_Id )->update($dateloaddata);
 json_decode("hello");
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
            $ddd='<img  src="http://127.0.0.1:8000/product/'.$row->Image.'" width="50" height="60">';
           
            $outputlog.= '
            <tr>
            <td>'.$ddd.'</td>
            <td>'.$row->Product_name.'</td>
            <td>'.$row->Product_load_numer.'</td>
            <td>'.$row->Purches_Price.'</td>   
             <td>'.$row->Product_load_numer*$row->Purches_Price.'</td>  
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
  

  // public function expence_add_func(Request $reqs){
  //   if(Auth::check()){
      
  //     $ShopID = Auth::user()->ShopID;
  //     $stratf_id = Auth::user()->id;
  //     $adminCat = Auth::user()->AdminCat;

  
  //     $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
      
  //     if(count($cash_flow_data) > 0){	
  //     foreach($cash_flow_data as $row)
  //     {
  //     $cashAount=$row->cash_credit;
  //     $cashdebit=$row->cash_debit;
  //     }
  
  //     if($cashAount>=$reqs->tk){
  //       $cash_flow['cash_credit']=$cashAount-$reqs->tk;
  //      }else{
  //       $cash_flow['cash_credit']=$cashAount;
  //      }
  //     $cash_flow['details']='Next Sale data loaded';
  //     $cash_flow['Update_date']=date("Y-m-d");
  //     $cash_flow['cash_debit']=$cashdebit+$reqs->tk;
  
     
  //     DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);    
  //     echo json_encode($cash_flow);	
      
     

  //   $cashflow['Outlet_id']=$ShopID; 
  //   $cashflow['Admincat']=$adminCat; 
  //   $cashflow['debit_tk']=$reqs->tk; 
  //   $cashflow['date']=date("Y-m-d");
  //   $cashflow['Update_Date']=date("Y-m-d"); 	
  //   $cashflow['Admin_show_date']=date("Y-m-d"); 
  //   $cashflow['stratf_id']=$stratf_id; 
  //   $cashflow['details']=$reqs->selectvale;
  //   $cashflow['Ac_check']=0; 
  //   $cashflow['expend_cost']=1;

  //   if($adminCat=="Admin"){
  //     $cashflow['admin_show']=1; 
	 
  //    }else{
  //     $cashflow['admin_show']=0; 
	
  //    }

  //   $cashflow['supplier_id']=0; 
  //   $cashflow['Name']=Auth::user()->Name; 
  //   DB::table('cash_flow_cost_info')->insert($cashflow);  
  //   }

  // }else{
  //    return view('login');
  //   }
  //  }
   



   
  // public function expence_update_func(Request $reqs){
  //   if(Auth::check()){
      
  //     $ShopID = Auth::user()->ShopID;
  //     $stratf_id = Auth::user()->id;
  //     $adminCat = Auth::user()->AdminCat;
  //     $cashdebitupdate=0;
  //     $cashdebitupdatedata=0;

  //     $expenceupdate=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $reqs->id)->where('admin_show', 0)->get();
  //     $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	

  //     if(count($expenceupdate) > 0){	
  //       foreach($expenceupdate as $rowc)
  //       {
  //      // $cashAount=$row->cash_credit;
  //       $cashdebitupdateadd=$rowc->debit_tk;
  //       }
  //       $cashdebitupdate=$cashdebitupdateadd-$reqs->tk;

  //       if($cashdebitupdate>0){
  //         $cashdebitupdatedata=$cashdebitupdate*1;
  //       }else{
  //         $cashdebitupdatedata=$cashdebitupdate*-1;
  //       }
        
  //       echo json_encode($cashdebitupdate);	
  //     }


      
      
  //     if(count($cash_flow_data) > 0){	
  //     foreach($cash_flow_data as $row)
  //     {
  //     $cashAount=$row->cash_credit;
  //     $cashdebit=$row->cash_debit;
  //     }
  
  //     if($cashAount>=$reqs->tk){
  //       $cash_flow['cash_credit']=$cashAount-$reqs->tk;
  //      }else{
  //       $cash_flow['cash_credit']=$cashAount;
  //      }

  //      if($cashdebitupdate>0){
  //       $cash_flow['cash_debit']=$cashdebit-$cashdebitupdatedata;
  //       $cash_flow['cash_credit']=$cashAount+$cashdebitupdatedata;
  //     }else{
  //       $cash_flow['cash_debit']=$cashdebit+$cashdebitupdatedata;
  //       $cash_flow['cash_credit']=$cashAount-$cashdebitupdatedata;
  //     }


  //     $cash_flow['details']='Last is update data';
  //     $cash_flow['Update_date']=date("Y-m-d");
  //    DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);    
  

  //   $cashflow['debit_tk']=$reqs->tk; 
  //   $cashflow['Update_Date']=date("Y-m-d"); 	
  //   $cashflow['details']=$reqs->selectvale;
  //   DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $reqs->id)->update($cashflow);  


  //  }

  // }else{
  //    return view('login');
  //   }
  //  }
   

  //  public function get_data_to_update_func($id){
  //   if(Auth::check()){
  //   $ShopID = Auth::user()->ShopID;
  //   $statechek = Auth::user()->AdminCat;

  //   $showdata=DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('Admincat', $statechek)->where('expend_cost', 1)->where('id', $id)->get();
  //   $data_count=$showdata->count();


  // if($data_count>0){
  //   foreach($showdata as $rows ){
  //     $data_sent=array("id"=>$rows->id,"datails"=>$rows->details,"debit_taka"=>$rows->debit_tk);
  //     echo json_encode($data_sent);
  //   }
  // }else{
  //   $data_sent=array("message"=>0);
  //   echo json_encode($data_sent);
  // }
  //  // echo json_encode($reqs->id);Admincat

  //   }else{
  //    return view('login');
  //   }
  //  }

   
//    public function get_data_to_delete_func($id){
//     if(Auth::check()){
//     $ShopID = Auth::user()->ShopID;
//     $statechek = Auth::user()->AdminCat;
//     $stratf_id = Auth::user()->id;
//     $cashdebitupdatedata=0;
//     $cashcash_credit=0;
//     $cashcash_debit=0;

   
 
//   $expenceupdate=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id)->where('Outlet_Id', $ShopID)->where('id', $id)->get();
//   $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	

//   if(count($expenceupdate) > 0){	
//     foreach($expenceupdate as $rowc)
//     {
//     $cashdebitupdatedata=$rowc->debit_tk;
//     }
//   }
    
//   if(count($cash_flow_data) > 0){	
//     foreach($cash_flow_data as $rowc)
//     {
//     $cashcash_credit=$rowc->cash_credit;
//     $cashcash_debit=$rowc->cash_debit;
//     }
//   }
 
//   $cash_flow['cash_credit']=$cashcash_credit+$cashdebitupdatedata;
//   $cash_flow['cash_debit']=$cashcash_debit-$cashdebitupdatedata;
//  DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);   

// $showdata=DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('Admincat', $statechek)->where('id', $id)->delete();
//  $data_sent=array("message"=>$showdata);
//  echo json_encode($cash_flow);
// //echo json_encode($cashdebitupdatedata);

//     }else{
//      return view('login');
//     }
// }


// public function get_data_to_cash_sent_func($id){
//   if(Auth::check()){

//     $ShopID = Auth::user()->ShopID;
//     $statechek = Auth::user()->AdminCat;
//     $stratf_id = Auth::user()->id;
//     $stratf_name = Auth::user()->Name;
//     $cashcash_credit_get=0;
//     $cashcash_credit=0;
//     $cashcash_debit=0;
//     $cashcash_debit_tk=0;
//     $getname="";
//     $nameget='';

//     $cash_flow_cost_info_get=DB::table('cash_flow_cost_info')->where('stratf_id',$stratf_id )->where('Outlet_id', $ShopID)->where('Ac_check', 0)->get();	

//     $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	

//      $users=DB::table('users')->where('id',$id )->get();	

//     //this is paramiter id get to quary so to needs two quary
//     $cash_get_pre_id=DB::table('cash_flow')->where('Starf_Id',$id )->where('Outlet_Id', $ShopID)->get();	
  
//     if(count($cash_flow_data) > 0){	
//       foreach($cash_flow_data as $rowc)
//       {
//       $cashcash_credit=$rowc->cash_credit;
//       $cashcash_debit=$rowc->cash_debit;
//       }
//     }


//     if(count($cash_get_pre_id) > 0){	
//       foreach($cash_get_pre_id as $rowc)
//       {
//       $cashcash_credit_get=$rowc->cash_credit;
//       $cashcash_debit_get=$rowc->cash_debit;
//       $getname=$rowc->Starf_Name;
//       }
//     }


//     if(count($cash_flow_cost_info_get) > 0){	
//       foreach($cash_flow_cost_info_get as $row)
//       {

//      $cashcash_debit_tk=$row->debit_tk;
//      $cash_flow_cost['Ac_check']=1;
//      DB::table('cash_flow_cost_info')->where('id',$row->id)->update($cash_flow_cost);
//       }
//     }


//     if(count($users) > 0){	
//       foreach($users as $row)
//       {
//         $nameget=$row->Name;
//       }
//     }


   
//     //id			cash_credit				

//     $cash_sent['Outlet_id']=$ShopID;
//     $cash_sent['Starf_Name']=$stratf_name ;
//     $cash_sent['Starf_Id']=$stratf_id;
//     $cash_sent['cash_credit']=$cashcash_credit;
//     $cash_sent['cash_debit']=$cashcash_debit;
//     $cash_sent['date']=date("Y-m-d");
//     $cash_sent['Admin_show_date']=date("Y-m-d");
//     $cash_sent['confrm_access']=0;

//     if($statechek=="Admin"){
//       $cash_sent['admin_show']=1;
//     }else{
//       $cash_sent['admin_show']=0;
//     }
    
//     $cash_sent['Sent_Starf_id']=$id;
//     $cash_sent['Sender_Name']=$nameget;
    
//     $resultt=DB::table('cash_sent_any_person')->insert($cash_sent);   
//     echo json_encode($cash_sent);


// if($resultt==1){
//   $cash_flow['cash_credit']=0;
//   $cash_flow['cash_debit']=0;
//   $cash_flow['sent_confim']=1;
//   $cash_flow['Update_date']=date("Y-m-d");
//   $cash_flow['cash_mark']="Sent Cash";
//   $cash_flow['cash_provider_name']=$getname;
//   DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);  

//   $cash_flow_get['cash_credit']=$cashcash_credit_get+$cashcash_credit;
//   $cash_flow_get['Update_date']=date("Y-m-d");
//   $cash_flow_get['cash_mark']="Get Cash";
//   $cash_flow_get['cash_provider_name']=$stratf_name;
//   $cash_flow_get['notifi_meg']=1;
//   DB::table('cash_flow')->where('Starf_Id',$id)->where('Outlet_Id', $ShopID)->update($cash_flow_get); 






//   $cash_flow_cost_info['Ac_check']=1;
//   DB::table('cash_flow_cost_info')->where('Outlet_id', $ShopID)->where('stratf_id', $stratf_id)->update($cash_flow_cost_info);
     

//   $users_upadate['Notifi_meg']=1;
//   DB::table('users')->where('id',$id)->update($users_upadate); 

//   $profit_datails['show_key']=1;
//   DB::table('profit_datails')->where('Outlet_Id', $ShopID)->where('Starf_Id', $stratf_id)->update($profit_datails);
      
//   $users_upadate['Notifi_meg']=1;
//   DB::table('users')->where('id',$id)->update($users_upadate); 

// }




//   }else{
//    return view('login');
//   }
//  }
 



   public function cashshowadminfunction(Request $reqs){
    if(Auth::check()){
    $ShopID = Auth::user()->ShopID;
    $cashshow['admin_show']=1;
    DB::table('cash_flow_cost_info')->where('Outlet_Id', $ShopID)->where('id', $reqs->id)->update($cashshow);
    echo json_encode($reqs->id);

    }else{
     return view('login');
    }
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

// public function report(){
//     return view('deshboard.report');
//   }
       
// public function removedate($id,$qty){

//    // $datess['message']=$id;
//    // $datess['messagefff']=$qty;
      
//   if(Auth::check()){
//     	$ids = Auth::user()->Shop_cat_id;
//     	$outlet_Id_user = Auth::user()->ShopID;
    				
// 	  $stockinfo=DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->get();			
//     		if(count($stockinfo) === 0){				
//     			 $datess['message']='Exit';
//     			 echo json_encode($datess);	   
//     		}else{

    	
    		
//            foreach($stockinfo as $row)
//            {
//            $Total_product=$row->Total_product;
//            $total_sales_count=$row->Total_sales_count;
//            }
           
//            	$productt=$Total_product+$qty;
//              $datesss['Total_sales_count']=$total_sales_count-$qty; 
//            	$datesss['Total_product']=$productt; 
//            	DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->update($datesss);
//            	echo json_encode($stockinfo);
           
//     		}		
//        }
 
//   }
  
   
 //product purcher add  data 
 
 public function purcher_add($id, $qty,$num){
 	  if(Auth::check()){
    	$ids = Auth::user()->Shop_cat_id;
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
 }
 

  
// //----this function is sales  profite data insert table profit_datails----route name //profiturl--------
//   public function profit_add(Request $reqs){
//  	  if(Auth::check()){

//       	$ids = Auth::user()->id;
//        	$outlet_Id_user = Auth::user()->ShopID;
//         $datechack=date("Y-m-d");
//         $cashAount=0;
//         $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$ids )->where('Outlet_Id', $outlet_Id_user)->get();	
    

//         $profitdata['Recive_number']=$reqs->numkey; 
//         $profitdata['totaldiscout']=$reqs->diskey; 	
//         $profitdata['Profit']=$reqs->amountkey;   	
//         $profitdata['Net_Profit']=$reqs->amountkey-$reqs->diskey; 	
//         $profitdata['Total_sales']=$reqs->saleskey+$reqs->diskey; 	
//         $profitdata['Net_Sale']=$reqs->saleskey; 
//         $profitdata['Names']=$reqs->namekey; 
//         $profitdata['show_key']=0; 
//         $profitdata['Date']=date("Y-m-d");   
// 		    $profitdata['Admin_Id']=Auth::user()->AdminKey;
// 		    $profitdata['Starf_Id']=Auth::user()->id;    
// 		    $profitdata['Starf_Name']=Auth::user()->Name; 
// 		    $profitdata['Outlet_Id']=Auth::user()->ShopID;    
// 		    $profitdata['Outlet_Name']=Auth::user()->Shopname; 
//         $profitdata['Discount_type']=$reqs->discatkey;    
//         DB::table('profit_datails')->insert($profitdata);    	
//       	echo json_encode($profitdata);		


//        if(count($cash_flow_data) > 0){				
       
//            foreach($cash_flow_data as $row)
//             {
//             $cashAount=$row->cash_credit;
//             }

//        $cash_flow['cash_credit']=$cashAount+$reqs->saleskey;
//        $cash_flow['details']='Next Sale data loaded';
//        $cash_flow['Update_date']=date("Y-m-d");
//       DB::table('cash_flow')->where('Starf_Id',$ids)->where('Outlet_Id', $outlet_Id_user)->update($cash_flow);    
//        echo json_encode($cash_flow);	
       	
         
//        }else{

//       $cash_flow['date']=date("Y-m-d");
//       $cash_flow['cash_credit']=$reqs->saleskey;
//       $cash_flow['cash_provider_name']='Cash not Sent';
//       $cash_flow['details']='NetSales';
//       $cash_flow['cash_debit']=0;
//       $cash_flow['Outlet_Id']=Auth::user()->ShopID; 
//       $cash_flow['Starf_Name']=Auth::user()->Name; 
//       $cash_flow['Starf_Id']=Auth::user()->id; 
//       $cash_flow['admin_show']=0;
//       $cash_flow['sent_confim']=0;
//       $cash_flow['Admin_show_date']=date("Y-m-d");
//       $cash_flow['Update_date']=date("Y-m-d"); 
// 	  $cash_flow['cash_mark']="No mark";
// 	  $cash_flow['notifi_meg']=0;
//       DB::table('cash_flow')->insert($cash_flow);    	
//       echo json_encode($cash_flow_data);	

//        }


//     }
 
//  }  
 
 
// public function profit_show(){
// if(Auth::check()){

//   $AdminCat = Auth::user()->AdminCat;
//   $Starf_Id = Auth::user()->id;
//   $ids = Auth::user()->ShopID;
//   $datee=date("Y-m-d");

//   if($AdminCat=="Admin"){
//     $profit_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->orderBy('id', 'DESC')->where('Date', $datee)->get();
//      echo json_encode($profit_show);
//   }else{
//     $profit_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->orderBy('id', 'DESC')->where('Date', $datee)->where('Starf_Id', $Starf_Id)->get();
//     echo json_encode($profit_show);
//   }
// }
// else{
//   $datess['message']="Please contract administration ";
//   echo json_encode($datess);
// }
// }



/*
public function deshboard_all_info_get_data_func(){

  if(Auth::check()){
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



    }
    }else{
      
      $datess['message']="Please contract administration ";
      echo json_encode($datess); 
     
    }
}

*/
  
// public function profitdatailsfun($id){
  
//     if(Auth::check()){	
//     	$outlet_Id_user = Auth::user()->ShopID;
// 	       $profitdatailsfun=DB::table('purches_list')->where('Outlet_Id', $outlet_Id_user)->where('Recive_num', $id)->get();	
// 	    $profit_with_discout=DB::table('profit_datails')->where('Outlet_Id', $outlet_Id_user)->where('Recive_number', $id)->get();	

// 	    if(count($profitdatailsfun) === 0 && count($profit_with_discout) === 0){				
//     			 $profitdatailsfun['message']='Exit';
//     		echo json_encode($profitdatailsfun);	   
//     		}
//     		else
//     		{

//           $all_data = array("profit_with_discout"=>$profit_with_discout,"profitdatailsfun"=>$profitdatailsfun);
//           echo json_encode($all_data);
      
//     		}
    		
// 		 }else{return view('login');}
//   }
    
// public function searchidcan($id){
	
// 	  if(Auth::check()){
//     	$ids = Auth::user()->Shop_cat_id;
//     	$outlet_Id_user = Auth::user()->ShopID;
    				
// 	  $stockinfo=DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->get();			
//     		if(count($stockinfo) === 0){				
//     			 $datess['message']='Exit';
//     			 echo json_encode($datess);	   
//     		}else{
//          	foreach($stockinfo as $row)
//           {
//            $Total_product=$row->Total_product;
//            $total_sales_count=$row->Total_sales_count;
//           }
           
//            if($Total_product<=0){
//            	  $datess['message']='Exit';
//            	  $datess['data']='NO';
//     			  echo json_encode($datess);	 
//            }else{
           	
//            	$productt=$Total_product-1;
             
//            	$datesss['Total_product']=$productt; 
//             $datesss['Total_sales_count']=$total_sales_count+1; 
//            	DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->update($datesss);
//            	echo json_encode($stockinfo);
           	
//            }
//     		}
	
    		
    			
//        }
//   }
  
public function barcodes($id){

	  if(Auth::check()){

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
    			



       }else{
        return view('login');
       }

       
  }
    
    
public function customerinfo(){	
  if(Auth::check()){
     $data['posts']=DB::table('customer_info')->orderBy('total_purches_count', 'DESC')->limit(45)->paginate(9);
     $datatwo['poststwo']=DB::table('customer_info')->orderBy('id', 'DESC')->limit(8)->get();
    return view('frontend.customer',$data, $datatwo)->with('messages','false');
  }else{
    return view('login');
    }
  }
   
public function customerdelete($id){	
  
    DB::table('customer_info')->where('id',$id)->delete();
    return redirect("customerinfo");
 
  }
    
    
    
// this just stock add and info show   
public function stockaddfuntion(){	
 if(Auth::check()){
    	$ids = Auth::user()->Shop_cat_id;
    	$data = DB::table('catgory_info')->where('Shop_cat_id', $ids)->get();
      return view('deshboard.stock_add')->with('data', $data);
    }else{
    	return view('login');
    	}
  }
  







//---this a function is when payable of supplier sime money pay then use ----route:  payabledataloaded------------
public function Daily_activity_auto_data_loaded(){
 
   
  if(Auth::check()){ 
    $ShopID = Auth::user()->ShopID;
    $stratf_id = Auth::user()->id;
    $adminCat = Auth::user()->AdminCat;
    $cash_credit=0;
    $cash_debit=0;
$cash_flows= DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();
$total_cash_update_info = $cash_flows->count();
if($total_cash_update_info > 0){
  foreach($cash_flows as $row)
     {
     $date=$row->date;
     }
echo json_encode($date);

}else{

  $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->where('cash_credit','>',0)->get();	
  $total_row_cash_info = $cash_flow_data->count();
   $cash_flow['cash_credit']=0;
   $cash_flow['Update_date']=date("Y-m-d");
   $cash_flow['sent_confim']=1;
   $cash_flow['cash_debit']=0;
    if($total_row_cash_info > 0){
     foreach($cash_flow_data as $row)
     {
     $cash_credit+=$row->cash_credit;
     $cash_debit+=$row->cash_debit;
     DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->where('id',$row->id )->update($cash_flow);
     }
     $cash_flow['date']=date("Y-m-d");
     $cash_flow['cash_credit']=$cash_credit;
     $cash_flow['cash_provider_name']='Name';
     $cash_flow['details']='New day Start';
     $cash_flow['cash_debit']=$cash_debit;
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
     }
    // echo json_encode("1");
    }
 
  
    }else{
      return view('login');
      }
          
} 




















//---this a function is when payable of supplier sime money pay then use ----route:  payabledataloaded------------
  public function Payable_finally(Request $reqs){
 
   
     if(Auth::check()){ 
       $ShopID = Auth::user()->ShopID;
       $stratf_id = Auth::user()->id;
       $adminCat = Auth::user()->AdminCat;
	   
  
       $suppile_info = DB::table('suppile_info')->where('id', $reqs->id)->where('ShopID', $ShopID)->get();
       $total_row_suppile_info = $suppile_info->count();

       $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
    


       
       if($total_row_suppile_info > 0){

        foreach($suppile_info as $row)
        {
        $paymenttkamount=$row->paymenttk;
       
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
     $cash_flow['cash_debit']=$reqs->tk;;
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
    
       }else{
         return view('login');
         }
             
   } 


//---this a function is when payment of supplier some money pay then use ----route:  stockloadfinally------------
public function Stock_Info_add_finally(Request $reqs){
  if(Auth::check()){ 

    $ShopID = Auth::user()->ShopID;
    $stratf_id = Auth::user()->id;
    $adminCat = Auth::user()->AdminCat;

    $data = DB::table('suppile_info_log')->where('supplier_id', $reqs->id)->where('Outlet_Id', $ShopID)->get();
    $total_row = $data->count();

    $suppile_info = DB::table('suppile_info')->where('id', $reqs->id)->where('ShopID', $ShopID)->get();
    $total_row_suppile_info = $suppile_info->count();

    $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
    


      if($total_row > 0)
      {
       foreach($data as $row)
       {
         $this->input_data_stock_load($row->Barcode,$row->Product_load_numer);

       }
       
      }
      
    if($total_row_suppile_info > 0){

      
      $datess['admin_show']=1;  
      $datess['paymenttk']=$reqs->tk;  
      $datess['paymentmethod']=$reqs->methedpay;  
      $datess['payable']=$reqs->payabletk;  
      $datess['paymentdate']=date("Y-m-d"); 

      $suppile_info_log['Admin_show']=1; 
      DB::table('suppile_info')->where('id', $reqs->id)->where('ShopID', $ShopID)->update($datess);

      DB::table('suppile_info_log')->where('supplier_id', $reqs->id)->where('Outlet_Id', $ShopID)->update($suppile_info_log);
    
    
    
      //----------------------this amount assets--------------
      if($reqs->methedpay=="other"){
       $assets['Outlet_id']=$ShopID;
       $assets['AdminCat']=$adminCat;
       $assets['Date']=date("Y-m-d");
       $assets['Info_update']=date("Y-m-d");
       $assets['Amount']=$reqs->tk;
       $assets['Amountdetails']="PaymentOtherCash";
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
      $cashflow['details']="Supplier Cost"; 
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
    //----------------------this insert cash flow system--------------





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

    if($reqs->methedpay=="cashdrawer"){
      DB::table('cash_flow')->where('Starf_Id',$stratf_id)->where('Outlet_Id', $ShopID)->update($cash_flow);    
      echo json_encode($cash_flow);	
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
   $cash_flow['cash_mark']="No mark";
   $cash_flow['notifi_meg']=0;
   $cash_flow['Update_date']=date("Y-m-d");
   DB::table('cash_flow')->insert($cash_flow);    	
    echo json_encode($cash_flow_data);	

  }
 //----------------------this insert cash flow system  end--------------

   //  echo json_encode($datess);
     }

   
  
    }else{
    	return view('login');
    	}
  	      
} 



public function input_data_stock_load($barcode,$Product_load_numer){

  if(Auth::check()){ 
    $ShopID = Auth::user()->ShopID;
    $data = DB::table('stock_info')->where('Barcode', $barcode)->where('Outlet_Id', $ShopID)->get();
    $newdate=date("Y-m-d");
	  $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $Total_product=$row->Total_product;
       } 
    $datess['Product_show_by_admin']=2;
    $datess['Product_load_numer']="0";
    $datess['Total_product']=$Total_product+$Product_load_numer;  
    $datess['Toral_product_load_count']=$Total_product+$Product_load_numer;  
    $datess['Update_Date']=$newdate;  
    DB::table('stock_info')->where('Barcode', $barcode)->where('Outlet_Id', $ShopID)->update($datess);
    echo json_encode($datess);

      }else{
       // echo json_encode("data insert fail");
      }
      
    }
}

// public function Stock_Info_add_demo(Request $reqs){
//   if(Auth::check()){ 
//     $ShopID = Auth::user()->ShopID;
//     $data = DB::table('stock_info')->where('Barcode', $reqs->Barcode)->where('Outlet_Id', $ShopID)->get();
// 	  $total_row = $data->count();
// 	  $ndate=date_create($reqs->Expire_date);	
// 	  $newdate=date_format($ndate,"Y-m-d");

//       if($total_row > 0)
//       {
//        foreach($data as $row)
//        {
//         $Total_product=$row->Total_product;
//         $loadeddate=$row->Expire_date;
//         $shopidload=$row->Outlet_Id;
//         $barcodes=$row->Barcode;
//        }
       
//        if($Total_product<=0){
//        $datess['Product_show_by_admin']=0;
//        $datess['Product_load_numer']=$reqs->Product_units;  
//        $datess['Purches_Price']=$reqs->Purches_Price;  
//        $datess['Sales_Price']=$reqs->Sales_Price;
//        $datess['Product_add_user_id']=Auth::user()->id;
//        $datess['Update_Date']=date("Y-m-d");
//        $datess['Descount_rate']=$reqs->Descount_rate; 
//        $datess['Expire_date']=$reqs->Expire_date; 
        
//         if($reqs->Weight=="empty"){
//        	$datess['Weight']="0";
//        }
//        else{
//        	$datess['Weight']=$reqs->Weight;
//        }
       
//       if($reqs->pieces=="empty"){
// 	       $datess['pieces']="0";
//         }
//        else{
// 	 $datess['pieces']=$reqs->pieces;
//        }
       
       
//        DB::table('stock_info')->where('Barcode', $reqs->Barcode)->where('Outlet_Id', $ShopID)->update($datess); 
//       echo json_encode($datess); 	
//       //echo json_encode("working this funcation");
    
//        }
       
//        else if($loadeddate==$newdate){
//        $total_pr=$reqs->Product_units;
//        $datess['Product_show_by_admin']=0; 
//        $datess['Product_load_numer']=$total_pr;  
//        $datess['Purches_Price']=$reqs->Purches_Price;  
//        $datess['Sales_Price']=$reqs->Sales_Price;
//        $datess['Product_add_user_id']=Auth::user()->id;
//        $datess['Update_Date']=date("Y-m-d");
//        $datess['Descount_rate']=$reqs->Descount_rate; 

 
//        if($reqs->Weight=="empty"){
//        	$datess['Weight']="0";
//        }
//        else{
//        	$datess['Weight']=$reqs->Weight;
//        }

//       if($reqs->pieces=="empty"){
// 	   $datess['pieces']="0";
//         }
//        else{
// 	 $datess['pieces']=$reqs->pieces;
//        }
       
       
//       DB::table('stock_info')->where('Barcode', $reqs->Barcode)->where('Outlet_Id', $ShopID)->update($datess); 
//       echo json_encode($datess);
	
//        }else{
       	 
//        	 $datess['message']='Exit';
//     	 echo json_encode($datess);		 
       	
//        }
       
//        }else{
//        $datess['Product_show_by_admin']=0; 
//        $datess['Product_name']=$reqs->Product_name;
//        $datess['Barcode']=$reqs->Barcode;
//        $datess['Facility_Product_for_internet']=FALSE;
//        $datess['Product_load_numer']=$reqs->Product_units;  
//        $datess['Total_product']="0";
//        $datess['Purches_Price']=$reqs->Purches_Price;  
//        $datess['Sales_Price']=$reqs->Sales_Price;
//        $datess['Product_add_user_id']=Auth::user()->id; 
//        $datess['Outlet_Id']=Auth::user()->ShopID;
//        $datess['Outlet_Name']=Auth::user()->Shopname;
//        $datess['Image']=$reqs->Image;  
//        $datess['Expire_date']=$reqs->Expire_date;  
//        $datess['Add_date']=date("Y-m-d");
//        $datess['Update_Date']=date("Y-m-d");
//        $datess['Descount_rate']=$reqs->Descount_rate;     
//        $datess['Catagory']=$reqs->Catagory;
//        $datess['Sub_Catagory']=$reqs->Sub_Catagory;
//        $datess['Sub_to_sub_catagory']=$reqs->Sub_to_sub_catagory;
//        $datess['Top_rating_range']=0;  
//        $datess['Toral_product_load_count']=0; 
//        $datess['Total_sales_count']=0;  
//       if($reqs->Weight=="empty"){
//        	$datess['Weight']="0";
//        }
//        else{
//        	$datess['Weight']=$reqs->Weight;
//        }
       
       
//        if($reqs->pieces=="empty"){
//        	$datess['pieces']="0";
//        }
//        else{
//        	$datess['pieces']=$reqs->pieces;
//        }
      
// 	   DB::table('stock_info')->insert($datess); 
	   
	   
// 	   echo json_encode($datess);
//        }
  
//     }else{
//     	return view('login');
//     	}     
// } 



  
public function customer_Data_add(Request $req){
        
   	 	
           $dates['customer_name']=$req->customer_name;
           $dates['mobile']=$req->mobile;
           $dates['address']=$req->address;             
           $dates['joind_date']=date("Y-m-d");
           $dates['balance']=0;      
           $dates['last_purches_date']= date("Y-m-d");              
           $dates['last_price_cost']=0;
           $dates['create_panel']="54578";
           $dates['createtor_id']="362";               
           $dates['total_purches_count']=0;
           $dates['customer_behebihar']="Good";
           $dates['coustmore_sale_id']="33455";             
           $dates['coustmore_retun_count']="1212";
           $dates['Admin_Id']="5632";
           $dates['Starf_Id']="6985";                 
           $dates['Starf_Name']="9685";
           $dates['Outlet_Id']="9658";
           $dates['Outlet_Name']="56"; 
           $dates['Device_Info']="965";   
                
           DB::table('customer_info')->insert($dates);          
           return redirect("customerinfo");
           // echo("hello nabd");
         // return view('customerinfo')->with('messages','true');
	}
 

 
//this purpose this product add and show update etc  
public function product_add(Request $reqs){	

if(Auth::check()){
$id = Auth::user()->Shop_cat_id;

$validator = Validator::make($reqs->all(), ['Barcode' => ['required',Rule::unique('product_info'.$id)],]);

if ($validator->fails()) {
	
	
	 $datess['message']="Exit";
	echo json_encode($datess); 
	

		
} else {
	  	
  	   $imageName = time().'.'.$reqs->Productimage->extension();  
  	   $naaa=time();    
       $datess['Barcode']=$reqs->Barcode;
       $datess['Product_name']=$reqs->Product_name;
          
       if($reqs->Weight=="empty"){
       	$datess['Weight']="0";
       }
       else{
       	$datess['Weight']=$reqs->Weight;
       } 
       
       $datess['Image']=$naaa."/".$imageName; 
       $datess['Catagory']=$reqs->Catagory;
       $datess['Sub_Catagory']=$reqs->Sub_Catagory;
       $datess['Sub_to_sub_catagory']=$reqs->Sub_to_sub_catagory; 
       $datess['Create_date']=date("Y-m-d");    
       $datess['Update_date']=date("Y-m-d");   
       $datess['Product_add_user_id']=Auth::user()->id;
       $datess['Outlet_Id']=Auth::user()->ShopID;

     try {	 	
      $reqs->Productimage->move(public_path('product/'.$naaa), $imageName); 
      DB::table('product_info'.$id)->insert($datess);  
      echo json_encode($datess);
      //  return redirect("productInfo");           
          } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
        
              }
          }
        } 
		}   
                
  } 
   
public function productdelete($id){	
  
    DB::table('product_info')->where('Product_ID',$id)->delete();
    return redirect("productInfo");
 
  }  
          
public function product_add_test(Request $request){
  	

 
  //	$reqs->validate(['product_barcode' => 'required|product_barcode|unique:product_info',]);
  	
//$test=$request->validate(['product_barcode' => 'required|unique:product_info',]);
           

$validator = Validator::make($request->all(), [
   'product_barcode' => 'required|unique:product_info',
]);

if ($validator->fails()) {
	
	echo("ase");
} else {
   echo("nai");
}

  } 
      
// public function imagesss(Request $request){
//      $validator = Validator::make($request->all(), ['image' => 'required|image|mimes:png,jpg,jpeg|max:200',]);
//       if ($validator->fails()) {
//             return response()
//                 ->json([
//                     'success' => false,
//                     'error' =>  $validation->errors()->first()
//                 ]);
//         }
//     }     
    
    
    
    
 //this all catagory system show   
 
public function GetSubCatAgainstMain($id){
	if(Auth::check()){
    		$ids = Auth::user()->Shop_cat_id;
        echo json_encode(DB::table('subcatgory_info')->where('Shop_cat_id', $ids)->where('catagory_id', $id)->get());
		}
    } 
    
public function GetSubCatAgainstMainmulti($id){
	   if(Auth::check()){
    		$ids = Auth::user()->Shop_cat_id;
        echo json_encode(DB::table('sub_sub_catgory_info')->where('Shop_cat_id', $ids)->where('sub_catagory_id', $id)->get());
       }
	}
     
public function catagory_add(Request $request){
  	
      $response = array(
          'catagory_name' =>$request->catagory_name,
          'date' =>date("Y-m-d"),
          'Shop_cat_id'=>Auth::user()->Shop_cat_id
      );

 		DB::table('catgory_info')->insert($response);          
        return response()->json($response);  
  } 
    
public function sub_catagory_add(Request $request){	
  	 for($i=0;$i<count($request->catagory_id);$i++)
 { 
	 // echo $request->catagory_name[$i].'<br>';        
       $arr = array(
       'catagory_id' =>$request->catagory_id[$i],
       'catagory_name' =>$request->catagory_name[$i],
       'date' =>date("Y-m-d"),
       'Shop_cat_id'=>Auth::user()->Shop_cat_id);
		DB::table('subcatgory_info')->insert($arr); 
 }
  	      try {	
        return redirect("productInfo");           
          } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
            echo('Duplicate Entry');
              }
          }      
    
  }
  
public function sub_to_sub_catagory_add(Request $request){	
  	 for($i=0;$i<count($request->catagory_id);$i++)
 { 
	 // echo $request->catagory_name[$i].'<br>';        
$arr = array(
'catagory_id' =>$request->catagory_id[$i],
'sub_catagory_id' =>$request->sub_catagory_id[$i],
'sub_catagory_name' =>$request->sub_catagory_name[$i],
'date' =>date("Y-m-d"),
'Shop_cat_id'=>Auth::user()->Shop_cat_id);
		DB::table('sub_sub_catgory_info')->insert($arr); 
 }
  	      try {	
        return redirect("productInfo");           
          } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
            echo('Duplicate Entry');
              }
          }      
    
  }
  
public function catagoryshow(){
            if(Auth::check()){
    		$ids = Auth::user()->Shop_cat_id;
  echo json_encode(DB::table('catgory_info')->where('Shop_cat_id', $ids)->orderBy('id', 'DESC')->limit(10)->get());
		}
  }
 
 
// customer info and loging user data info
 		
public function createnewprofile(){
    	if(Auth::check()){				
    	$id = Auth::user()->id;	
        $data['posts']=DB::table('users')->where('AdminKey',$id)->paginate(9);
        return view('frontend.newprofile',$data);
    	}
    	else{return view('login');}
	}
			

  public function product_supplier(){
    if(Auth::check()){	
      $id = Auth::user()->id;	
    //  if()
   
     // $data['posts']=DB::table('users')->where('AdminKey',$id)->paginate(9);
      return view('deshboard.product_supplier');
    }
    else{return view('login');}
}
  

// public function cashflowfun(){
//   if(Auth::check()){	
//     $id = Auth::user()->id;	
//     return view('deshboard.cash_flow');
//   }
//   else{return view('login');}
// }

public function userOnlineStatus(){
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-online' . $user->id))
                echo $user->name . " is online. <br>";
            else
                echo $user->name . " is offline <br>";
        }
    }
	
public function loginPageFunc(Request $request):RedirectResponse{
    	
    	 $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    	  
       if (Auth::attempt($credentials)) {
        	 $request->session()->regenerate();
            return redirect()->intended('overview')->withSuccess('You have Successfully loggedin');
        }
  
       // return redirect('login')->with("error",'Oppes! You have entered invalid credentials');
       
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
  
	}   
		
public function logout(Request $request): RedirectResponse{
    	Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    	return redirect('login');
	}
	 
public function employeadddemo(Request $require){  
        
       $require->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6', 
            'Mobile' => 'required|min:11',   
        ]);
        
         $date['AdminKey']=Auth::user()->id;
         $date['Shopname']=Auth::user()->Shopname;
         $date['ShopAddress']=Auth::user()->ShopAddress;
         $date['email']=$require->email; 
         $date['password']=Hash::make($require->password); 
         $date['StrafCount']=5; 
         $date['AdminCat']=$require->AdminCat; 
         $date['Mobile']=$require->Mobile;
         $date['MobileVerifa']="OK";  
         $date['CreateDate']=date("Y-m-d");
         $date['ProfileImage']="OK";    
         $date['UpdateProfileCout']="20";
         $date['Name']=$require->name;  
                 
      try {	
      	
       DB::table('users')->insert($date);  
        
      $this->employ_update();;
        return redirect("createnewprofile");           
          } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
            echo('Duplicate Entry');
              }
          }      
    }   
       
public function employeadd(Request $require){  
        
       $require->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6', 
            'Mobile' => 'required|min:11', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        
        
         $imageName = time().'.'.$require->image->extension();    
         $require->image->move(public_path('images'), $imageName);
         $date['AdminKey']=Auth::user()->id;
         $date['Shopname']=Auth::user()->Shopname;
         $date['ShopAddress']=Auth::user()->ShopAddress;
         $date['ShopID']=Auth::user()->ShopID;
         $date['email']=$require->email; 
         $date['password']=Hash::make($require->password); 
         $date['StrafCount']=5; 
         $date['AdminCat']=$require->AdminCat; 
         $date['Mobile']=$require->Mobile;
         $date['MobileVerifa']="OK";  
         $date['CreateDate']=date("Y-m-d");
         $date['image']=$imageName;    
         $date['UpdateProfileCout']="20";
         $date['Name']=$require->name; 
                            
    try {	
      	
       DB::table('users')->insert($date);      
      $this->employ_update();
        return redirect("createnewprofile");           
          } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
            echo('Duplicate Entry');
              }
          }      
    }    
           
public function employ_update(){
	
    $id = Auth::user()->id;	
    $StrafCount = Auth::user()->StrafCount;	
    $dat['StrafCount']=$StrafCount+1;
    DB::table('users')->where('id',$id)->update($dat);
    
  }
       
public function customRegistration(Request $require){  
        $require->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6', 
            'Mobile' => 'required|min:11',
            'ShopAddress' => 'required', 
            'Shopname' => 'required',       
        ]);
        
  
         $date['AdminKey']="6699";
         $date['Shopname']=$require->Shopname;
         $date['ShopAddress']=$require->ShopAddress; 
         $date['email']=$require->email; 
         $date['password']=Hash::make($require->password); 
         $date['StrafCount']=5; 
         $date['AdminCat']=$require->AdminCat; 
         $date['Mobile']=$require->Mobile;
         $date['MobileVerifa']=$require->MobileVerifa;  
         $date['CreateDate']=date("Y-m-d");
         $date['ProfileImage']=$require->ProfileImage;    
         $date['UpdateProfileCout']=$require->UpdateProfileCout;
         $date['Name']=$require->name;     
        
      try {
  	
       DB::table('users')->insert($date);    
        // $productId = DB::getPdo()->lastInsertId();.
       //   echo( $productId); 
        return redirect("/post/showdata");
            
          } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
            echo('Duplicate Entry');
              }
          } 
           
          
    }


	
//this all page show with date pass	
		
public function login(){
    	if(Auth::check()){return redirect('overview');}else{return view('login');}
	}
		
// public function sales(){    
//         if(Auth::check()){return view('deshboard.sales');}else{return view('login');}
// 	}
	
// public function home(){ 
//         if(Auth::check()){return view('frontend.deshboard');}else{return view('login');}   
//   }
				
// public function testssss(){    
//         if(Auth::check()){return view('frontend.test');}else{return view('login');}
// 	} 
	
public function oder(){
    	if(Auth::check()){return view('frontend.oder');}else{return view('login');}
	}
	
public function product(){
    	if(Auth::check()){return view('frontend.product');}else{return view('login');}
	}

public function profileView(){  
        
       return view('profile.profile') ;            
       
    } 	
	
			
public function productInfo(){
    	if(Auth::check()){
    		$id = Auth::user()->Shop_cat_id;
    		$data = DB::table('catgory_info')->where('Shop_cat_id', $id)->get();
    		$product = DB::table('product_info'.$id)->orderBy('Product_ID', 'DESC')->limit(11)->get();
          return view('deshboard.product_info')->with('data', $data)->with('product', $product);

    		}else{return view('login');}
	}
		
// public function productInfo_search(Request $request){
    	
    	
//     	 if(Auth::check()){	
//     		   $data = DB::table('catgory_info')->get();
//     		$product = DB::table('product_info')->where('Barcode', $request->search)->get();	
//          //  return view('deshboard.product_info')->with('data', $data)->with('product', $product);		
//        // echo($product);
//     		}else{return view('login');}
    	
    	
// 	}
		
		

public function action(Request $request){
	if(Auth::check()){
	
	 $id = Auth::user()->Shop_cat_id;
	 $ShopID = Auth::user()->ShopID;
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('product_info'.$id)
        ->where('Outlet_Id', $ShopID)
         ->where('Barcode', 'like', '%'.$query.'%')
         ->orWhere('Product_name', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('product_info'.$id)
         ->where('Outlet_Id', $ShopID)
         ->orderBy('Product_ID', 'desc')
         ->get();
      }
      
      $total_row = $data->count();
      
      
      if($total_row > 0)
      {
       foreach($data as $row)
       {
       //	$actual_link = "https://$_SERVER[HTTP_HOST]/product/";

      

       if(strval($row->Weight)=='0'){
         $showproduct=$row->Product_name;
       }else{
         $showproduct=$row->Product_name."". $row->Weight;
       }

        $output .= '
        <tr>
         <td>'.$row->Product_ID.'</td>
         <td>'.$row->Barcode.'</td>
         <td>'.$showproduct.'</td>
        </tr>
        ';

       }
      }
      else
      {
      	
      	
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      
      
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
      
	
		}
		
		
		//echo("hello");		
}

	}

public function stockchack(){
		
  //	$data = DB::table('catgory_info')->get();
    
    
    if(Auth::check()){
    
    // $id = Auth::user()->Shop_cat_id;
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
    }
  
  }
  




