<?php

namespace App\Http\Controllers\Deshboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsControllor extends Controller
{
   
public function reports(){
    return view('deshboard.reports');
  }
}
