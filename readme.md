# Opinionated styling rules for PHP-CS-Fixer

![CI](https://github.com/timacdonald/php-style/workflows/CI/badge.svg) [![Latest Stable Version](https://poser.pugx.org/timacdonald/php-style/v/stable)](https://packagist.org/packages/timacdonald/php-style) [![Total Downloads](https://poser.pugx.org/timacdonald/php-style/downloads)](https://packagist.org/packages/timacdonald/php-style) [![License](https://poser.pugx.org/timacdonald/php-style/license)](https://packagist.org/packages/timacdonald/php-style)

These are the rules applied across my personal projects and open source packages.

## Installation

You can install using [composer](https://getcomposer.org/) from [Packagist](https://packagist.org/packages/timacdonald/php-style).

```
$ composer require timacdonald/php-style --dev
```

## Basic usage

In your `.php_cs.dist` config file...

```php
<?php

// specify the paths to fix, as normal...

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests');

// the call and return the result of the following method...

return style_rules($finder);
```

## Thanksware

You are free to use this package, but I ask that you reach out to someone (not me) who has previously, or is currently, maintaining or contributing to an open source library you are using in your project and thank them for their work. Consider your entire tech stack: packages, frameworks, languages, databases, operating systems, frontend, backend, etc.
