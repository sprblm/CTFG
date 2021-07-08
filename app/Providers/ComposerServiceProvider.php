<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            '*', 'App\Http\ViewComposers\Categories',
        );

        view()->composer(
            ['welcome', 'projects-by-category'],
            'App\Http\ViewComposers\Tags'
        );

        view()->composer(
            ['welcome', 'projects-by-category'],
            'App\Http\ViewComposers\Countries'
        );
    }
}
