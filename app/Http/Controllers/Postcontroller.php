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


public function suplierstate(){


  if(Auth::check()){
     $output = '';
      $ShopID = Auth::user()->ShopID;
      $addID = Auth::user()->id;
      $data = DB::table('suppile_info')->where('ShopID', $ShopID)->get();
      $total_row = $data->count();
      
        if($total_row > 0)
        {
         foreach($data as $row)
         {
          $ddd='<input type="checkbox" id="myChecka" value="'.$row->company_name.'">';

          $output.= '
          <tr>
          <td>'.$row->name.'</td>
          <td>'.$row->unite.'</td>
          <td>'.$row->totaltk.'</td>
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
  


  public function suplier_info_log_state(){


    if(Auth::check()){
       $output = '';
        $ShopID = Auth::user()->ShopID;
        $addID = Auth::user()->id;
        $data = DB::table('suppile_info_log')->where('Outlet_Id', $ShopID)->get();
        $total_row = $data->count();
        
          if($total_row > 0)
          {
           foreach($data as $row)
           {
            $ddd='<img  src="http://127.0.0.1:8000/product/'.$row->Image.'" width="50" height="60">';
           
            $output.= '
            <tr>
             <td>'.$ddd.'</td>
            <td>'.$row->Product_name.'</td>
            <td>'.$row->Product_load_numer.'</td>
            <td>'.$row->Purches_Price.'</td>   
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
  $supplierarray['ShopID']= Auth::user()->ShopID;; 
  $datr= DB::table('suppile_info')->insertGetId($supplierarray);    


  echo json_encode($datr);


 }else{
  return view('login');
 }




}

public function report(){
    return view('deshboard.report');
 
  }
       
public function removedate($id,$qty){

   // $datess['message']=$id;
   // $datess['messagefff']=$qty;
      
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
           }
           
           	$productt=$Total_product+$qty;
           	$datesss['Total_product']=$productt; 
           	DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->update($datesss);
           	echo json_encode($stockinfo);
           
    		}		
       }
 
  }
  
   
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
 

  
 public function profit_add($discats,$totaldiscout,$sales,$amount,$num,$name){
 	
 	  if(Auth::check()){
    	$ids = Auth::user()->Shop_cat_id;
    	$outlet_Id_user = Auth::user()->ShopID;
    	
        $profitdata['Recive_number']=$num; 
        $profitdata['totaldiscout']=$totaldiscout; 	
        $profitdata['Profit']=$amount; 		
        $profitdata['Net_Profit']=$amount-$totaldiscout; 	
        $profitdata['Total_sales']=$sales+$totaldiscout; 	
        $profitdata['Net_Sale']=$sales; 
        $profitdata['show_key']=0; 
        $profitdata['Date']=date("Y-m-d");   
		    $profitdata['Admin_Id']=Auth::user()->AdminKey;
		    $profitdata['Starf_Id']=Auth::user()->id;    
		    $profitdata['Starf_Name']=Auth::user()->Name; 
		    $profitdata['Outlet_Id']=Auth::user()->ShopID;    
		    $profitdata['Outlet_Name']=Auth::user()->Shopname; 
		    $profitdata['Names']=$name;
        $profitdata['Discount_type']=$discats;
           
        DB::table('profit_datails')->insert($profitdata); 
           	
      	echo json_encode($profitdata);
           
    			
       }
 
 }  
 
 
public function profit_show(){
if(Auth::check()){

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
else{
  $datess['message']="Please contract administration ";
  echo json_encode($datess);
}
}
  
public function month_profit(){

  if(Auth::check()){
    $AdminCat = Auth::user()->AdminCat;
    $Starf_Id = Auth::user()->id;
    if($AdminCat=="Admin"){
      $ids = Auth::user()->ShopID;
      $Total_product=0;
      $salesproduct=0;
      $total_com_val=0;
      //$total_com_val_net=0;

      $datee=date("Y-m-d");
      $tk_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->where('Date', $datee)->get();
      $total_com_vals=DB::table('stock_info')->where('Outlet_Id', $ids)->get();

      foreach($total_com_vals as $row)
      {  
       $total_com_val+=$row->Purches_Price*$row->Total_product;
      }
      
      foreach($tk_show as $row)
      {
       $Total_product+=$row->Total_sales;
       $salesproduct++;
      }

      $all_month = array("Total_product"=>$Total_product,"salesproduct"=>$salesproduct,"totalcomvalu"=>$total_com_val);
      echo json_encode($all_month);
    }else{

      $ids = Auth::user()->ShopID;
      $Total_product=0;
      $salesproduct=0;
      $datee=date("Y-m-d");
      $tk_show=DB::table('profit_datails')->where('Outlet_Id', $ids)->where('Date', $datee)->where('Starf_Id', $Starf_Id)->get();
      foreach($tk_show as $row)
      {
       $Total_product+=$row->Total_sales;
       $salesproduct++;
      }
      $all_month = array("Total_product"=>$Total_product,"salesproduct"=>$salesproduct,"totalcomvalu"=>"000");
      echo json_encode($all_month);

    }
    
    }else{
      
      $datess['message']="Please contract administration ";
      echo json_encode($datess); 
     
    }
}



public function totalproduct(){
  if(Auth::check()){
    $ids = Auth::user()->ShopID;
    $Totalproduct=0;
   // $datee=date("Y-m-d");
    $tk_show=DB::table('stock_info')->where('Outlet_Id', $ids)->get();
    foreach($tk_show as $row)
    {
    // $Total_product=$row->Total_sales;
     $Totalproduct++;

    }
    echo json_encode($Totalproduct);
    
    }else{
      
      $datess['message']="Please contract administration ";
      echo json_encode($datess); 
     
    }
}

  
public function profitdatailsfun($id){
  
    if(Auth::check()){	
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
    		
		 }else{return view('login');}
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
          }
           
           if($Total_product<=0){
           	  $datess['message']='Exit';
           	  $datess['data']='NO';
    			  echo json_encode($datess);	 
           }else{
           	
           	$productt=$Total_product-1;
           	$datesss['Total_product']=$productt; 
           	DB::table('stock_info')->where('Barcode', $id)->where('Outlet_Id', $outlet_Id_user)->update($datesss);
           	echo json_encode($stockinfo);
           	
           }
    		}
	
    		
    			
       }
  }
  
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
     $data['posts']=DB::table('customer_info')->orderBy('total_purches_count', 'DESC')->limit(45)->paginate(9);
     $datatwo['poststwo']=DB::table('customer_info')->orderBy('id', 'DESC')->limit(8)->get();
    return view('frontend.customer',$data, $datatwo)->with('messages','false');
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
    	//$data['posts']=DB::table('catgory_info')->get();
    	//	return view('deshboard.product_info',$data);
    		
    }else{
    	return view('login');
    	}
 
 
 //if(Auth::check()){return view('deshboard.stock_add');}else{return view('login');}
  }
  
public function Stock_Info_add(Request $reqs){
 


  if(Auth::check()){ 
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
       $datess['Total_product']=$reqs->Product_units;  
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
       		
       $total_pr=$Total_product+$reqs->Product_units;
       $datess['Total_product']=$total_pr;  
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
       				     		
       $datess['Product_name']=$reqs->Product_name;
       $datess['Barcode']=$reqs->Barcode;
       $datess['Facility_Product_for_internet']=FALSE;
       $datess['Total_product']=$reqs->Product_units;  
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
  
    }else{
    	return view('login');
    	}
  	      
} 



public function Stock_Info_add_demo(Request $reqs){
  if(Auth::check()){ 
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
  
    }else{
    	return view('login');
    	}     
} 



  
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
            return redirect()->intended('home')->withSuccess('You have Successfully loggedin');
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
    	if(Auth::check()){return redirect('home');}else{return view('login');}
	}
		
public function sales(){    
        if(Auth::check()){return view('deshboard.sales');}else{return view('login');}
	}
	
public function home(){ 
        if(Auth::check()){return view('frontend.deshboard');}else{return view('login');}   
  }
				
public function testssss(){    
        if(Auth::check()){return view('frontend.test');}else{return view('login');}
	} 
	
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
          <td>'.$showproduct.'</td>
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
  




