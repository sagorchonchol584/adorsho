<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\SalesMarket\SalesControllor;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

  // Use View Composer to share data only when a view is being rendered
//   View::composer('*', function ($view) {
//     $cashCredit = 66; // Default value

//     if (Auth::check()) {
//         $cashCredit = DB::table('cash_flow')
//             ->where('Outlet_Id', Auth::user()->ShopID)
//             ->where('Starf_Id', Auth::user()->id)
//             ->value('cash_credit') ?? 0; // Use null coalescing to avoid null values
//     }
//     $view->with('cashCredit', $cashCredit);
// });



} 
}
