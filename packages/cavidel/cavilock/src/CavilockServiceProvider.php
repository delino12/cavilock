<?php

namespace Cavidel\Cavilock;

use Illuminate\Support\ServiceProvider;

class CavilockServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Cavidel\Cavilock\CavilockController');
        $this->loadViewsFrom(__DIR__.'/views', 'cavilock');
    }
}
