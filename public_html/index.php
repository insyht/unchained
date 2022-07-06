<?php

require_once __DIR__ . '/../laravel/vendor/autoload.php';
require_once __DIR__ . '/../autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once __DIR__ . '/../laravel/public/index.php';
