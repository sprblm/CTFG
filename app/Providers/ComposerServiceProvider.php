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
            '*', 'App\Http\ViewComposers\CategoryHierarchies',
        );

        view()->composer(
            ['welcome', 'projects.projects-by-category', 'projects.search-results'],
            'App\Http\ViewComposers\Tags'
        );

        view()->composer(
            ['welcome', 'projects.projects-by-category', 'projects.search-results'],
            'App\Http\ViewComposers\Countries'
        );
    }
}
