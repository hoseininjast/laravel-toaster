<?php

namespace Hoseininjast\Toaster\Providers;

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
        $this->app->make(__DIR__.'/ToasterController');
        $this->loadViewsFrom(__DIR__ . '/views', 'Toaster');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/assets/' => public_path('vendor/Hoseininjast/toaster'),
        ], 'Toaster-assets');
    }
}
