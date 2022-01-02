<?php

namespace Ogdams\Contact;

use Illuminate\Support\ServiceProvider;


class ContactServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php'); //load routes
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //load migrations files
        $this->loadViewsFrom(__DIR__.'/views', 'contact'); //load views
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact'); //merge configuration files
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);  //publish files


    }
}
