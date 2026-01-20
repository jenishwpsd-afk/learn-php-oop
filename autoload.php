<?php

spl_autoload_register(function ($class) {

    $baseDir = __DIR__ . '/';

    $path = $baseDir . str_replace('App\\', 'app/', $class);
    $path = str_replace('\\', '/', $path) . '.php';

    if (file_exists($path)) {
        require $path;
    }
});
