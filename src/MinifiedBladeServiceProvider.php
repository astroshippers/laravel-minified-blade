<?php

namespace AstroShippers\MinifiedBlade;

use Illuminate\Support\ServiceProvider;

class MinifiedBladeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->singleton('minified-blade.compiler', function () {
            return new MinifiedBladeCompiler($this->app['files'], $this->app['config']['view.compiled']);
        });

        $this->app['view']->getEngineResolver()->register('minified-blade', function () {
            return new CompilerEngine($this->app['minified-blade.compiler']);
        });

        $this->app['view']->addExtension('min.blade.php', 'minified-blade');
    }
}
