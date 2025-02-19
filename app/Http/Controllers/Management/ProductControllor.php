<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class ProductControllor extends Controller
{
    
   


    public function productInfo(){
    	
    		$id = Auth::user()->Shop_cat_id;
    		$data = DB::table('catgory_info')->where('Shop_cat_id', $id)->get();
    		$product = DB::table('product_info'.$id)->orderBy('Product_ID', 'DESC')->limit(11)->get();
           return view('management.product_info')->with('data', $data)->with('product', $product);

    		
	}
		

    public function productdelete($id){	
  
        DB::table('product_info')->where('Product_ID',$id)->delete();
        return redirect("productInfo");
     
      }  
     
      
      
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



}
