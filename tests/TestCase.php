<?php

namespace AstroShippers\MinifiedBlade\Tests;

use AstroShippers\MinifiedBlade\MinifiedBladeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        // ...
    }

    protected function getPackageProviders($app)
    {
        return [
            MinifiedBladeServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        // ...
    }
}
