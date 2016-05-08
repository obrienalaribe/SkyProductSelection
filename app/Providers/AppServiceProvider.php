<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Product\Catalogue\CatalogueDataProviderInterface', 'App\Product\Catalogue\CatalogueDataProvider');
        $this->app->bind('App\Customer\CustomerDataProviderInterface', 'App\Customer\CustomerDataProvider');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
