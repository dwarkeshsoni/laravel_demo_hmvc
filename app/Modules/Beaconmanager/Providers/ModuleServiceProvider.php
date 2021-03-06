<?php

namespace App\Modules\Beaconmanager\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../Resources/Lang', 'beaconmanager');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'beaconmanager');
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations', 'beaconmanager');
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
