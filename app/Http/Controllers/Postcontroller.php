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

class Postcontroller extends Controller
{

  public function showMasge(){
    return view('test');
 
  }
  
  
   public function option_show(){
    $data['posts']=DB::table('sub_sub_catgory_info')->get();
    return view('post/show',$data);
  }
  
  
  
  public function test(){
   $hashed = Hash::make('password', [
    'rounds' => 12,
]);

echo($hashed );
 
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
  
  
  
  
 public function stockaddfuntion(){	
  
 if(Auth::check()){return view('deshboard.stock_add');}else{return view('login');}
  }

 public function customerinfonew(){
    $data['posts']=DB::table('customer_info')->get();
     return $data;
     
     // return "hello";
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
 
  public function datashow(){

    $data['posts']=DB::table('users')->get();
    return view('post/index',$data);
 
  }
   
  public function product_add(Request $reqs){
  	
  	 $imageName = time().'.'.$reqs->Image->extension();    
         $reqs->Image->move(public_path('imagesss'), $imageName);
         
         
         
       $datess['Product_name']=$reqs->Product_name;
       $datess['Add_date']=date("Y-m-d");
       $datess['Update_Date']=date("Y-m-d");
       $datess['product_barcode']=$reqs->product_barcode;
       $datess['Outlet_Id']=Auth::user()->ShopID;
       $datess['Outlet_Name']=Auth::user()->ShopAddress;
       $datess['Product_add_user_id']=Auth::user()->id;
       $datess['Image']=$imageName;
       $datess['Weight']=$reqs->Weight;
       $datess['Expire_date']=$reqs->Expire_date;
       $datess['Product_rate']=$reqs->Product_rate;
       $datess['Sales_rate']=$reqs->Sales_rate; 
       $datess['Descount_rate']=$reqs->Descount_rate;     
       $datess['catagory_id']=$reqs->catagory_id;
       $datess['Sub_catagory_id']=$reqs->Sub_catagory_id;
       $datess['Sub_to_sub_catagory']=$reqs->Sub_to_sub_catagory; 
       $datess['Product_units']=$reqs->Product_units; 
       $datess['Top_rating_range']=$reqs->Top_rating_range;
     
   
     
print_r($datess);
  
  } 
  
  
   public function catagory_add(Request $request){
  	
      $response = array(
          'catagory_name' => $request->catagory_name,
          'date' =>date("Y-m-d"),
      );

 		DB::table('catgory_info')->insert($response);          
        return response()->json($response);
    
  } 
  
  
    public function sub_catagory_add(Request $request){	
  	 for($i=0;$i<count($request->catagory_id);$i++)
 { 
	 // echo $request->catagory_name[$i].'<br>';        
       $arr = array('catagory_id' =>$request->catagory_id[$i],'catagory_name' =>$request->catagory_name[$i],'date' =>date("Y-m-d"));
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
$arr = array('catagory_id' =>$request->catagory_id[$i],'sub_catagory_id' =>$request->sub_catagory_id[$i],'sub_catagory_name' =>$request->sub_catagory_name[$i],'date' =>date("Y-m-d"));
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

  echo json_encode(DB::table('catgory_info')->orderBy('id', 'DESC')->limit(10)->get());
  }
  
  
  public function employeadddemo(Request $require)
    {  
        
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
       
   public function employeadd(Request $require)
    {  
        
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
        
   public function profileView()
    {  
        
       return view('profile.profile') ;            
       
    } 
       
   public function employ_update(){
	
    $id = Auth::user()->id;	
    $StrafCount = Auth::user()->StrafCount;	
    $dat['StrafCount']=$StrafCount+1;
    DB::table('users')->where('id',$id)->update($dat);
    
  }
       
   public function customRegistration(Request $require)
    {  
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

  public function delete($id){	
  
    DB::table('users')->where('Adminid',$id)->delete();
    return redirect("/post/showdata");
 
  }

  public function single_data_update(Request $require, $id){

     $date['name']=$require->Name;
    $date['email']=$require->email;
    DB::table('users')->where('id',$id)->update($date);
    return redirect("/post/showdata"); 
    
  }

  public function single_data_show_update($id){
    $data['posts']=DB::table('users')->where('Adminid',$id)->get();
    return view('post/update',$data);
  }

  public function single_data_show($id){
    $data['posts']=DB::table('users')->where('Adminid',$id)->get();
    return view('post/show',$data);
  }

  public function Index(Request $require){
          $date['name']=$require->name;
         $date['email']=$require->email;    
        $date['password']=Hash::make($require->password);
        
        
    
  try {
            DB::table('users')->insert($date);          
            return redirect("/post/showdata");
            
          } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
            return 'Duplicate Entry';
              }
          }
    }
     
  public function systemInfo(Request $req){
            $dates['company_Id']=$req->company_Id;
            $dates['company_Name']=$req->company_Name;
            $dates['date']=$req->date;
            DB::table('system_info')->insert($dates);          
            return redirect("/productInfo");
	}
  
  public function loginPageFunc(Request $request):RedirectResponse
    {
    	
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
		
   public function logout(Request $request): RedirectResponse
    {
    	Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    	return redirect('login');
	}
	
	
	
	public function login()
    {
    	if(Auth::check()){return redirect('home');}else{return view('login');}
	}
	
	
	 public function home()
    {    
        if(Auth::check()){return view('frontend.deshboard');}else{return view('login');}
	} 
	
		public function oder()
		
    {
    	if(Auth::check()){return view('frontend.oder');}else{return view('login');}
	}
	
		public function product()
    {
    	if(Auth::check()){return view('frontend.product');}else{return view('login');}
	}
	
		public function productInfo()
    {
    	if(Auth::check()){
    		
    		$data = DB::table('catgory_info')->get();
        return view('deshboard.product_info')->with('data', $data);
    	//$data['posts']=DB::table('catgory_info')->get();
    	//	return view('deshboard.product_info',$data);
    		
    		}else{return view('login');}
	}
	
	  public function GetSubCatAgainstMain($id){
        echo json_encode(DB::table('subcatgory_info')->where('catagory_id', $id)->get());
    } 
    
     public function GetSubCatAgainstMainmulti($id){
        echo json_encode(DB::table('sub_sub_catgory_info')->where('sub_catagory_id', $id)->get());
    }
		
	 public function createnewprofile()		
    {
    	if(Auth::check()){				
    	$id = Auth::user()->id;	
        $data['posts']=DB::table('users')->where('AdminKey',$id)->paginate(9);
        return view('frontend.newprofile',$data);
    	}
    	else{return view('login');}
	}
	
	
	
	 public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-online' . $user->id))
                echo $user->name . " is online. <br>";
            else
                echo $user->name . " is offline <br>";
        }
    }
	
	
		
}








/*
 
*/




