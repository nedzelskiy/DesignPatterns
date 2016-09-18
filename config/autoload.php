<?php

function __autoload($class)
{
    $way = str_replace([
        'php\\',
        'DesignPatterns\\',
        '\\',
    ], [
        'php\classes\\',
        '',
        '/'
    ], $class);
    $root = __DIR__ . '/../';
    require_once $root . $way . '.php';
}
    