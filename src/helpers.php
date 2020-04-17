<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function style_rules(Finder $finder): Config
{
    return require __DIR__.'/rules.php';
}
