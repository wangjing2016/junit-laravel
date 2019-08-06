<?php
namespace Wj\JunitLaravel\Providers;

use Illuminate\support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class JunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerRoutes();
        $this->loadViewsFrom(__DIR__.'/../../resources/views','junit');
    }

    public function boot()
    {

    }
    public function routeConfiguration()
    {
        return [
            'namespace'=>'Wj\JunitLaravel\Http\Controllers',
            'prefix' =>'junit',
            'middleware'=>'web'
        ];
    }
    public function registerRoutes()
    {
        echo 1234;
        Route::group($this->routeConfiguration(),function(){
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
}