<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use League\CommonMark\Extension\Table\Table;


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
           $datess['Description']=$reqs->Description; 
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
               <td><span class="my-text-color"><i class="bx bx-edit bx-sm" onclick="pop_custom_on(\''.addslashes($row->Product_ID).'\')"></i></span></td>
               <td><span style="color:red";><i class="bx bxs-x-circle bx-sm" onclick="deleteproduct(\''.addslashes($row->Product_ID).'\')"></i></span></td>
        
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
      
public function updata_data_chece(Request $request){
  $id = Auth::user()->Shop_cat_id;
  $domain = $_SERVER['HTTP_HOST'];
  $product=DB::table('product_info'.strval($id))->where('Product_ID',$request->product_id)->get();

if(count($product)>0){

  foreach($product as $rows){

  $Image='product/'.strval($rows->Image);
  $Barcode= $rows->Barcode;
  $Product_name= $rows->Product_name;
  $weightd= $rows->Weight;

    $Catagory=DB::table('catgory_info')->where('id',$rows->Catagory)->value('catagory_name');
    $Sub_Catagory=DB::table('subcatgory_info')->where('id',$rows->Sub_Catagory)->value('catagory_name_s');
    $Sub_to_sub_catagory=DB::table('sub_sub_catgory_info')->where('id',$rows->Sub_to_sub_catagory)->value('sub_catagory_name');

  }

  $Catagorydata=DB::table('catgory_info')->get();
  $subcatgory_info=DB::table('subcatgory_info')->get();
  $sub_sub_catgory_info=DB::table('sub_sub_catgory_info')->get();

  
$alldata=['catagory'=>$Catagorydata, 'subcat'=>$subcatgory_info,'sub_to_sub_cat'=>$sub_sub_catgory_info,'cat_id'=>[ $Catagory,$Sub_Catagory,$Sub_to_sub_catagory],'product_info_data'=>[$Barcode,$Product_name,$weightd,$Image]];

}else{


}

 return response()->json($alldata);
}


public function data_delets(Request $request){
  $id = Auth::user()->Shop_cat_id;
  $ShopID = Auth::user()->ShopID;
  $showdata= DB::table('product_info'.strval($id))->where('Product_ID',$request->product_id)->where('Outlet_Id', $ShopID)->delete();
 return response()->json($showdata);
}

public function update_data(Request $request) {
  return response()->json($request->description);
}


}
