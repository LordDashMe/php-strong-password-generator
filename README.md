# PHP Strong Password Generator

A simple package that generate strong random characters that can be use for password.

[![Latest Stable Version](https://img.shields.io/packagist/v/LordDashMe/php-strong-password-generator.svg?style=flat-square)](https://packagist.org/packages/LordDashMe/php-strong-password-generator) [![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.6-8892BF.svg?style=flat-square)](https://php.net/) [![Build Status](https://img.shields.io/travis/LordDashMe/php-strong-password-generator/master.svg?style=flat-square)](https://travis-ci.org/LordDashMe/php-strong-password-generator) [![Coverage Status](https://img.shields.io/coveralls/LordDashMe/php-strong-password-generator/master.svg?style=flat-square)](https://coveralls.io/github/LordDashMe/php-strong-password-generator?branch=master)

## Requirement(s)

- PHP version from 5.6.* up to latest.

## Install

### via Composer

- Use the command below to install the package via composer:

```txt
composer require lorddashme/php-strong-password-generator
```

## Usage

- Basic usage:

```php
<?php

include __DIR__  . '/vendor/autoload.php';

use LordDashMe\StrongPasswordGenerator\StrongPasswordGenerator;

// Initialize the Strong Password Generator main class.
$strongPasswordGenerator = new StrongPasswordGenerator();

// Set the character length output.
$strongPasswordGenerator->length(25);

// Execute the generation process function.
$strongPasswordGenerator->generate();

// Get the generated output.
$strongPasswordGenerator->get(); // "abcde12345..."
```

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
