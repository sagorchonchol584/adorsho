<?php

namespace App\Http\Controllers\Accountbar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Facades\MyFacade;
class TransactionControllor extends Controller
{
    public function transaction_show(){
   // $dd=  Transaction::get();


 //  return response()->json($dd);
 echo MyFacade::myMethod(); // Output: HELLO

  
    }
}
