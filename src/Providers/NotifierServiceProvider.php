<?php

namespace BeautyCoding\Notifier\Providers;

use BeautyCoding\Notifier\Services\Notifier;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Laracasts\Utilities\JavaScript\JavaScriptServiceProvider;

class NotifierServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerServiceProviders();
        $this->registerAliases();
    }

    /**
     * Register providers
     * @return void
     */
    public function registerServiceProviders()
    {
        /*
         * Laracast js utils
         */
        $this->app->register(JavaScriptServiceProvider::class);

        /*
         * Notifier
         */
        $this->app->singleton('Notifier', function ($app) {
            return new Notifier();
        });
    }

    /**
     * Register aliases
     * @return void
     */
    public function registerAliases()
    {
        $loader = AliasLoader::getInstance();

        if (!array_has(config('app.aliases'), 'Notifier')) {
            $loader = AliasLoader::getInstance();

            /*
             * Not need it to make manually aliases in config\app.php
             */
            $loader->alias('Notifier', \BeautyCoding\Notifier\Facades\NotifierFacade::class);
        }
    }
}
