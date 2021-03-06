<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.language_switcher', function ($view) {
            $view->with('currentLocale', app()->getLocale());
            $view->with('availableLocales', config('app.available_locales'));
        });
    }
}
