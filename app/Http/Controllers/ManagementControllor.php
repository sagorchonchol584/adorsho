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
use App\Models\MainCategory;
class ManagementControllor extends Controller
{
   
        public function categorysview(){
                $id = Auth::user()->Shop_cat_id;
                $data = DB::table('catgory_info')->where('Shop_cat_id', $id)->get();
                $product = DB::table('product_info'.$id)->orderBy('Product_ID', 'DESC')->limit(11)->get();
              return view('Management.Category')->with('data', $data)->with('product', $product);
    
          //  return view('Management.Category');
        }


        public function get_all_funation_data(){
            $id = Auth::user()->Shop_cat_id;
            $data = DB::table('catgory_info')->where('Shop_cat_id',$id )->get();
            $subcatgo = DB::table('subcatgory_info')->where('Shop_cat_id',$id )->get();
            $sub_sub_catgo = DB::table('sub_sub_catgory_info')->where('Shop_cat_id',$id)->get();
            $catgory_info=["maincat" => $data,'catagory' =>$subcatgo, 'sub_catgory'=> $sub_sub_catgo];
            echo json_encode($catgory_info);

        }


}
