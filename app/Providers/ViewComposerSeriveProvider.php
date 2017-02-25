<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerSeriveProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.partials.aside_categories', 'App\Http\Composer\CategoryComposer');
        view()->composer('layouts.partials.lastedpost', 'App\Http\Composer\LastedPostComposer');
        view()->composer('layouts.partials.tags', 'App\Http\Composer\TagsComposer');
        view()->composer('layouts.partials.lastedpostfull', 'App\Http\Composer\LastedPostFullComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
