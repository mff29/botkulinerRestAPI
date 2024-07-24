<?php 

// app/Providers/RepositoryServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RestoranRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Repositories\RestoranRepository', function($app) {
            return new RestoranRepository();
        });
    }

    public function boot()
    {
        //
    }
}
