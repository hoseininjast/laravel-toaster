<?php

namespace hoseininjast\toaster\Providers;

use Illuminate\Support\ServiceProvider;

class ToasterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(__DIR__.'/../Http/Controllers/ToasterController.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'Toaster');
        $this->mergeConfigFrom(
            __DIR__.'/../config/Toaster.php',
            'LaravelToasterConfig'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../assets/' => public_path('vendor/Hoseininjast/toaster'),
        ], 'Toaster-assets');
        $this->publishes([
            __DIR__.'/../config/Toaster.php' => config_path('LaravelToaster.php'),
        ], 'LaravelToaster');
    }
}
