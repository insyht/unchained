# Unchained
Separate Laravel code from your own, to make updates a breeze.

## How to use
- Create a `laravel` directory in your project's root directory and place a fresh Laravel installation in it
- Load this package in your project using `composer require insyht/unchained:^version` where `version` is the main 
  version of Laravel you plan to use (for example: 9)
- Define your root namespace in the `.env` file in your project's root directory
- Create an index.php file in either your `public` or `public_html` directory with the following lines:
```php
<?php

require_once __DIR__ . '/../vendor/insyht/unchained/loader.php';
```
- Use your root namespace in all classes that override Laravel classes and keep the same directory structure as Laravel
- So for instance, if you want to create a controller and your root namespace is `Unchained`, your controller should 
  be `app/Http/Controllers/TestController.php` with the FQN `Unchained\App\Http\Controllers\TestController`
- You can place your routes in a directory called `routes` in your project's root directory

## Updating Laravel
If you ever want to update your Laravel version, simply empty the `laravel` directory and load the new version of 
Laravel in it. Then go to your `composer.json` file and change the version of Unchained to the same version as 
Laravel. So if you upgraded to Laravel 10, you set the Unchained package to 
