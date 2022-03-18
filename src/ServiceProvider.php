<?php

namespace Jaswinder\Testpackage2;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot() 
    {
        // load my config
        // load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // laod migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // load the views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'testpackage2');
    }
}