## Read me

## About

[PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) is an open-source tool that can enforce, and detect violations of, PHP coding styles. With predefined rules, it allows you to have a strict coding style.

This repo is intended for use on all Cursor Startups Project.

## Installation

Require the package in your laravel or php project.
```bash
composer require cursorstartups/php-styles --dev
```

If you are working on a laravel project copt `.php_cs.dist`
```bash
cp vendor\cursorstartups\php-styles\.php_cs.dist.laravel.php .php_cs.dist.php
```

## Usage

To Fix code, run
```bash
./vendor/bin/php-cs-fixer fix
```