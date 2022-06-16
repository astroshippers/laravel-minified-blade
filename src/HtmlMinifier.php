<?php

namespace AstroShippers\MinifiedBlade;

class HtmlMinifier
{
    protected array $rules = [
        '/<!--[^\[](.|\s)*?-->/' => '',
        '/<\?php/' => '<?php ',
        '/@(.*)\n/' => '@$1 ',
        '/\n+/' => '',
        '/\t+/' => '',
        '/\s+/' => ' ',
        '/(>)\s+(<\/?)/' => '$1$2',
        '/\s+(\/?>)/' => '$1',
    ];

    public function minify(string $view): string
    {
        return preg_replace(
            array_keys($this->rules),
            array_values($this->rules),
            $view,
        );
    }
}
