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
        //publish migration with tags //php artisan vendor:publish --tag=migrations
    $this->publishes([__DIR__.'/database/migrations/' => database_path('migrations')], 'migrations');
    //publish seeders
   // $this->publishes([__DIR__.'/database/seeders/' => database_path('seeders')], 'seeders');

        $this->loadViewsFrom(__DIR__.'/views', 'contact'); //load views
        //publish email mark down
        $this->publishes([
            __DIR__.'/views' => resource_path('contact\email.php'),
        ], 'email-mark-down');
        //publish contact email
        $this->publishes([
            __DIR__.'/views' => resource_path('email.php'),
        ], 'contact-form');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact'); //merge configuration files
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ], 'config-contact');  //publish files


    }
}
