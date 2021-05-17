<?php


namespace Dev1024\StorageLinkRoute\Tests;

use Dev1024\StorageLinkRoute\StorageLinkRouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            StorageLinkRouteServiceProvider::class,
        ];
    }
}