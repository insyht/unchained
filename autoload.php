<?php

spl_autoload_register(
    function ($className) {
        // first look in the Unchained directory. If not found, then let it go to the Laravel autoloader(s)
        if (stripos($className, 'App\Unchained') === 0) {
            $path = explode('\\', $className);
            $path = array_slice($path, 2);
            $path = implode('/', $path) . '.php';
            require_once __DIR__ . '/app/' . $path;
        }
        switch ($className) {
            case 'App\Providers\RouteServiceProvider':
                require_once __DIR__ . '/app/Providers/RouteServiceProvider.php';
                break;
            default:
                break;
        }
    },
    true,
    true
);
