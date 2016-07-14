<?php

namespace Arisharyanto\gitauth;

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
        //
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
