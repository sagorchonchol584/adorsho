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
           // echo json_encode($catgory_info);
            return response()->json($catgory_info);

        }
        public function nested_get_all_funation_data()
        {
            // Get the Shop_cat_id of the authenticated user
            $id = Auth::user()->Shop_cat_id;
        
            // Fetch category information along with related subcategory and sub-subcategory information
            $data = DB::table('catgory_info')
                ->where('catgory_info.Shop_cat_id', $id)
                ->join('subcatgory_info', 'catgory_info.id', '=', 'subcatgory_info.catagory_id')
                ->join('sub_sub_catgory_info', 'subcatgory_info.id', '=', 'sub_sub_catgory_info.sub_catagory_id')
                ->select(
                    'catgory_info.id as category_id',
                    'catgory_info.catagory_name',
                    'subcatgory_info.id as subcategory_id',
                    'subcatgory_info.catagory_name_s',
                    'sub_sub_catgory_info.id as sub_subcategory_id',
                    'sub_sub_catgory_info.sub_catagory_name'
                )
                ->get();
        
            // Transform the data into a nested structure
            $nestedData = [];
            foreach ($data as $row) {
                // Check if category already exists
                if (!isset($nestedData[$row->category_id])) {
                    $nestedData[$row->category_id] = [
                        'category_name' => $row->catagory_name,
                        'subcategories' => [],
                    ];
                }
        
                // Check if subcategory already exists under the category
                if (!isset($nestedData[$row->category_id]['subcategories'][$row->subcategory_id])) {
                    $nestedData[$row->category_id]['subcategories'][$row->subcategory_id] = [
                        'subcategory_name' => $row->catagory_name_s,
                        'sub_subcategories' => [],
                    ];
                }
        
                // Add sub-subcategory under the subcategory
                $nestedData[$row->category_id]['subcategories'][$row->subcategory_id]['sub_subcategories'][] = [
                    'sub_subcategory_name' => $row->sub_catagory_name,
                ];
            }
        
            // Return the nested data as JSON response
            return response()->json($nestedData);
        }

public function new_get_all_funation_data()
    {
    $id = Auth::user()->Shop_cat_id;

    // Fetch all categories, subcategories, and sub-subcategories for the given Shop_cat_id
    $categories = DB::table('catgory_info')->where('Shop_cat_id', $id)->get();
    $subcategories = DB::table('subcatgory_info')->where('Shop_cat_id', $id)->get();
    $subSubcategories = DB::table('sub_sub_catgory_info')->where('Shop_cat_id', $id)->get();

    // Create a nested array structure
    $nestedData = [];
    foreach ($categories as $category) {
        $nestedData[$category->id] = [
            'category_name' => $category->catagory_name,
            'subcategories' => []
        ];

        foreach ($subcategories as $subcategory) {
            if ($subcategory->catagory_id == $category->id) {
                $nestedData[$category->id]['subcategories'][$subcategory->id] = [
                    'subcategory_name' => $subcategory->catagory_name_s,
                    'sub_subcategories' => []
                ];

                foreach ($subSubcategories as $subSubcategory) {
                    if ($subSubcategory->sub_catagory_id == $subcategory->id) {
                        $nestedData[$category->id]['subcategories'][$subcategory->id]['sub_subcategories'][] = [
                            'sub_subcategory_name' => $subSubcategory->sub_catagory_name
                        ];
                    }
                }
            }
        }
    }

    // Return the data as a JSON response
    return response()->json($nestedData);
}


}
