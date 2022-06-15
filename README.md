# package to provide `.min.blade.php` file extension

Just add the `.min` to your `.blade.php`, and the template will get minified! (even before rendering)

## Usage

Let's use this file as an example.

```blade
// welcome.blade.php
<div>
    @if($age > 13)
        <p>
            Welcome to your new account!
        </p>
    @else
        <b>
            Sorry, access denied.
        </b>
    @endif
</div>
```

Normally, without using this package it will be compiled into this:

```php
<div>
    <?php if($age > 13): ?>
        <p>
            Welcome to your new account!
        </p>
    <?php else: ?>
        <b>
            Sorry, access denied.
        </b>
    <?php endif; ?>
</div>
<?php /**PATH /home/asdf/code/notionmailer/resources/views/test.blade.php ENDPATH**/ ?>
```

But, if you add this package and use `.min` in your file extension, you will have the following result:

```php
<div><?php if($age> 13): ?><p> Welcome to your new account! </p><?php else: ?><b> Sorry, access denied. </b><?php endif; ?></div><?php /**PATH /home/asdf/code/notionmailer/resources/views/test.min.blade.php ENDPATH**/ ?>
```


## What is the use case?

- Email templates
- [Get rid of automatically added whitespace when using x-components syntax](https://github.com/laravel/framework/issues/34931)

## Why not just use a directive, such as `@minified` and `@endminified`?

Directives get executed after the template is rendered, which may add unwanted behavior such as your dynamic content spacing being minified.
