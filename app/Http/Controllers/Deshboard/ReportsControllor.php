<?php

namespace App\Http\Controllers\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class ReportsControllor extends Controller
{
   
public function reports(){
    return view('deshboard.reports');
  }


public function transication_fun(){


  Transaction::create([
    'details' => 'Purchase of electronics',
    'amount_catagorise' => 0, // this way to indenty for debit==0, credit==1;
    'amount_trans' => 15000000.50,
    'shop_id' => 1,  
    'shatf_id' => 3,  
]);

  return  response()->json('helllo');
}



public function show_fun(){

  $transactions = Transaction::all();


  return  response()->json($transactions);
}

}
