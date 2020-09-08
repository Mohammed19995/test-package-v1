<?php

namespace TestPackage;

use Illuminate\Support\ServiceProvider;
use TestPackage\Controllers\TestController;

class TestServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->loadViewsFrom(__DIR__."/views" , 'TestPackage');
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
//        $this->publishes([
//            __DIR__.'/config/testpackage.php' => config_path('testpackage.php'),
//            __DIR__.'/views' => base_path('resources/views/vendor/TestPackage'),
//        ]);
    }


    public function boot()
    {
        $this->app->make(TestController::class);
    }
}
