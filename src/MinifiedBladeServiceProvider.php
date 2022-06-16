<?php

namespace AstroShippers\MinifiedBlade;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Engines\CompilerEngine;

class MinifiedBladeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('minified-blade.compiler', function () {
            return new MinifiedBladeCompiler($this->app['files'], $this->app['config']['view.compiled']);
        });
    }

    public function boot(): void
    {
        $this->app['view']->getEngineResolver()->register('minified-blade', function () {
            return new CompilerEngine($this->app['minified-blade.compiler']);
        });

        $this->app['view']->addExtension('min.blade.php', 'minified-blade');
    }
}
