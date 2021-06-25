<?php

use PhpCsFixer\Finder;

// Example for Laravel Project
$finder = Finder::create()
  ->exclude(__DIR__ . '/bootstrap',)
  ->in([
    __DIR__ . '/app',
    __DIR__ . '/config',
    __DIR__ . '/database',
    __DIR__ . '/resources',
    __DIR__ . '/routes',
    __DIR__ . '/tests',
  ])
  ->name('*.php')
  ->notName('*.blade.php')
  ->ignoreDotFiles(true)
  ->ignoreVCS(true);

return CursorStartups\styles($finder);
