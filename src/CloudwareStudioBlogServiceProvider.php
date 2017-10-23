<?php

namespace Cloudware\Blog;

use Illuminate\Support\ServiceProvider;

class CloudwareStudioBlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/cloudware-studio/blog'),
        ], 'views');

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/cloudware-studio'),
        ], 'public');

        /*$this->publishes([
            __DIR__ . '/config' => config_path('cloudware-studio'),
        ], 'config');*/

        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/http/routes.php';

        //$this->loadViewsFrom(__DIR__ . '/views', 'blog');
        $this->loadViewsFrom(base_path('resources/views/vendor/cloudware-studio/blog'), 'blog');//si no se usan las del vendor es necesario publicarlas
    }
}
