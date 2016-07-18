<?php

namespace Arisharyanto\Gitauth;

use Illuminate\Support\ServiceProvider;

class GitauthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'gitauth');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['gitauth'] = $this->app->share(function($app) {
            return new Gitauth;
        });
    }
}
