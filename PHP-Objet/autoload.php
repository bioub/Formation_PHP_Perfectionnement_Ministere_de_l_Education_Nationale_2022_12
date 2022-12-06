<?php

spl_autoload_register(function ($fqcn) {
    $prefix = 'MinEduc';
    $baseDir = __DIR__ . '/src';

    $path = str_replace($prefix, $baseDir, $fqcn);
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path) . '.php';

    if (file_exists($path)) {
        require_once $path;
    }
});