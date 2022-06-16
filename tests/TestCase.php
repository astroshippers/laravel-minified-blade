<?php

namespace AstroShippers\MinifiedBlade\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use AstroShippers\MinifiedBlade\MinifiedBladeServiceProvider;

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
