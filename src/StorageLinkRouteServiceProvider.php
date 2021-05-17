<?php

namespace Dev1024\StorageLinkRoute;

use Illuminate\Support\ServiceProvider;

class StorageLinkRouteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}