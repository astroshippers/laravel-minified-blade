<?php

namespace AstroShippers\MinifiedBlade;

use Illuminate\View\Compilers\BladeCompiler;

class MinifiedBladeCompiler extends BladeCompiler
{
    public function compileString($value): string
    {
        return $this->minifyContents(
            parent::compileString($value)
        );
    }

    protected function minifyContents(string $contents): string
    {
        return (new HtmlMinifier())->minify($contents);
    }
}
