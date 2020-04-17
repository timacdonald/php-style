<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function style_rules(Finder $finder, array $rules = []): Config
{
    $config = require __DIR__.'/rules.php';

    \assert($config instanceof Config);

    return $config->setRules(\array_merge($config->getRules(), $rules));
}
