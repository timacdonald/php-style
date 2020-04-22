<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function style_rules(Finder $finder, array $rules = []): Config
{
    $rules = \array_merge(require __DIR__.'/rules.php', $rules);

    return PhpCsFixer\Config::create()
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
