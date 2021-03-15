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
        $this->app->bind('App\Services\Contracts\ContactServiceInterface', 'App\Services\ContactService');
        $this->app->bind('App\Services\Contracts\EmailServiceInterface', 'App\Services\EmailService');
        $this->app->bind('App\Repositories\Contracts\ContactRepositoryInterface', 'App\Repositories\ContactRepository');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
