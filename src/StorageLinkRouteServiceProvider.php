<?php

namespace Dev1024\StorageLinkRoute;

use Illuminate\Support\ServiceProvider;

class StorageLinkRouteServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(
            $this->basePath('routes/web.php')
        );

        $this->loadViewsFrom(
            $this->basePath('resources/views'), 'storage-link'
        );

        $this->publishes([
            $this->basePath('resources/views') => resource_path('views/vendor/storage-link')
        ], 'storage-link-views');
    }

    /**
     * @param string $path
     *
     * @return string
     */
    protected function basePath($path = '')
    {
        return __DIR__ . '/../' . $path;
    }
}