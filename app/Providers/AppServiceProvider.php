<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Integridad referencial
        if(config('database.default') == 'sqlite'){
            $db->connection()->getPdo()->exec("PRAGMA foreign_keys = ON");
            $db = app()->make('db');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
