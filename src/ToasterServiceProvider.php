<?php

namespace Hosein\Toaster;

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
        $this->app->make('Hosein\Toaster\ToasterController');
        $this->loadViewsFrom(__DIR__.'/views', 'Toaster');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/assets/' => public_path('vendor/Hosein'),
        ], 'Toaster-assets');
    }
}
