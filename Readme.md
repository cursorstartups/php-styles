## Read me

## About

[PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) is an open-source tool that can enforce, and detect violations of, PHP coding styles. With predefined rules, it allows you to have a strict coding style.

This repo is intended for use on all Cursor Startups Project.

## Installation

Require the package in your laravel or php project.

```bash
composer require cursorstartups/php-styles --dev
```

If you are working on a laravel project copy `.php-cs-fixer.dist.php` to root directory

```bash
cp vendor/cursorstartups/php-styles/.laravel-php-cs-fixer.dist.php .php-cs-fixer.dist.php
```

## Usage

To Fix code, run

```bash
./vendor/bin/php-cs-fixer fix
```

To make is easier, you can add a shortcut command on your `composer.json` as follows

```javascript
   "scripts": 
        "format": [
            "./vendor/bin/php-cs-fixer fix"
        ],
   }
```

After that you can run the following from terminal

```bash
composer format
```

Note: The above command will create `.php-cs-fixer.cache`. Remember to add this file to your `.gitignore`

## Credit
- [Amos Njogu](https://github.com/njoguamos) for maintaining this project
- Laravel shift for open sourcing this amazing configuration [laravel-shift/.php_cs.laravel.php](https://gist.github.com/laravel-shift/cab527923ed2a109dda047b97d53c200)
