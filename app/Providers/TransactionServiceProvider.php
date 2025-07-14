<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Riak\Connection;
use Illuminate\Contracts\Foundation\Application;
use App\Services\MyService;


class TransactionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton('myservice', function ($app) {
            return new MyService();
        });
    
    }
}
