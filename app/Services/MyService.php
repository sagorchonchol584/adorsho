<?php

namespace App\Services;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class MyService
{
    public function myMethod()
    {

      //  $cash_flow_data=DB::table('cash_flow')->where('Starf_Id',$stratf_id )->where('Outlet_Id', $ShopID)->get();	
  
        $ShopID = Auth::user()->ShopID;
        $statechek = Auth::user()->AdminCat;
        $stratf_id = Auth::user()->id;
        $stratf_name = Auth::user()->Name;
$dd=Transaction::get();
      $debit= Transaction::where('shatf_id',$stratf_id)->where('shop_id',$ShopID)->where('amount_catagorise',0)->sum('amount_trans');
     $credit= Transaction::where('shatf_id',$stratf_id)->where('shop_id',$ShopID)->where('amount_catagorise',1)->sum('amount_trans');

echo $dd;

    }
}