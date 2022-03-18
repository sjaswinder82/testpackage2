<?php

namespace Jaswinder\Testpackage2;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot() 
    {
        // load my config
        // load routes
        // laod migrations
        // load the views
    }
}