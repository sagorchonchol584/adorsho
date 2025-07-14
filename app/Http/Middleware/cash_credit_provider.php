<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class cash_credit_provider
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
             if (Auth::check()) {

            $cashCredit = DB::table('cash_flow')
                ->where('Outlet_Id', Auth::user()->ShopID)
                ->where('Starf_Id', Auth::user()->id)
                ->value('cash_credit'); // Get a single value
    
            View::share('cashCredit', $cashCredit);
        } else {
            View::share('cashCredit', "null");
          //  return Redirect::route('login');
        }
        
      
        return $next($request);
    }
}
